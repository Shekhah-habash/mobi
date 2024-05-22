<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments(column:'profile_id');
            $table->string(column:' profile name');
            $table->string(column:' profile img');
            $table->integer(column:'user_id') ->unique();
            $table->integer(column:'favorite prodect_id') ->unique();
            $table->integer(column:'Maintenancecenter_id') ->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
