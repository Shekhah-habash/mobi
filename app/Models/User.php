<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function mentireqests() {

        return $this ->hasmany( mentireqests:: class);

         }
         public function profile() {

            return $this ->belongsTo( profile:: class);

             }



     protected $fillable = [
             'name',
             'email',
             'password',
         ];

      protected $hidden = [
             'password',
             'remember_token',
         ];

      protected function casts(): array
         {
             return [
                 'email_verified_at' => 'datetime',
                 'password' => 'hashed',
             ];
         }
        }