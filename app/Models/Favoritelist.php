<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritelist extends Model
{
    use HasFactory;
    
    public function favoriteproducts() {

        return $this ->hasmany( favoriteproducts:: class);

         }
}
