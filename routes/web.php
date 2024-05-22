<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobicontroller;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/login', [Mobicontroller::class, 'login'])->name('login');
Route::post('/login', [Mobicontroller::class, 'loginpost'])->name('login.post');

Route::get('/Registration', [Mobicontroller::class, 'registration'])->name('registration');
Route::post('/Registration', [Mobicontroller::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [Mobicontroller::class, 'logout'])->name('logout');
