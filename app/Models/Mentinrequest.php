<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentinrequest extends Model
{
    use HasFactory;
    protected $fillable =[

        'Maintenancerequest_id',
        'Maintenancecenter_id',
        'user_id',
        'Maintenance_id',
        'Maintenance type',
        'description',
        'number of Maintenance',

    ];

        public function user() {

            return $this ->belongsTo( user:: class);

             }

        public function mentinanece() {
         return $this ->belongsTo(  mentinanece:: class);

                 }


                 public function profile() {

                    return $this ->belongsTo(profile:: class);
                }
}
