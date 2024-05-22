<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function user() {

        return $this ->belongsTo( user:: class);

         }

         public function mentinrequest() {

            return $this ->belongsTo( mentinrequest:: class);
        }
        public function favoriteproduct() {

            return $this ->belongsTo( favoriteproduct:: class);

             }

    use HasFactory;
}
