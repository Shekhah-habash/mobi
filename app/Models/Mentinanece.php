<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentinanece extends Model
{
    use HasFactory;

    protected $table = 'mentinanece';
    use HasFactory;

    public function mentinrequests() {

        return $this ->hasmany( mentinrequests:: class);
    }

}
