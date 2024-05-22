<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Mobicontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function loginpost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only(['username', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    public function registrationPost(Request $request)
{
    $request->validate([
        'name1' => 'required',
        'name2' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'bank' => 'required',
        'phone' => 'required',
    ]);

    $data = [
        'name1' => $request->name1,
        'name2' => $request->name2,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'bank' => $request->bank,
        'phone' => $request->phone,
    ];

    try {
        $user = User::create($data);
        if (!$user) {
            throw new \Exception("Failed to create user");
        }
        return redirect(route('registration'))->with("success", "Registration success, Login to access the app ");
    } catch (\Exception $e) {
        return redirect(route('registration'))->with("error", "Registration failed, try again.");
    }
}

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
