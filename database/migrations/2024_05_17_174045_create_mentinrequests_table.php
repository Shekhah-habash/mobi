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
        Schema::create('mentinrequests', function (Blueprint $table) {
            $table->increments(column:'Maintenancerequest_id') ->unsigned();
            $table->integer(column:'Maintenancecenter_id') ->unique();
            $table->integer(column:'user_id') ->unique();
            $table->integer(column:'Maintenance_id') ->unique();
            $table->integer(column:'Maintenance type');
            $table->string(column:'description');
            $table->integer(column:'number of Maintenance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentinrequests');
    }
};
