<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoriteproduct extends Model
{
    use HasFactory;
    protected $fillable =[
        'favoriteproduct_id',
        'favoritelist_id',
        'product_id',

        ];
        public function product() {

            return $this ->belongsTo( product:: class);

             }
             public function favoritelist() {

                return $this ->belongsTo( favoritelist:: class);
            }
            public function profile() {

                return $this ->belongsTo( profile:: class);
            }

}
