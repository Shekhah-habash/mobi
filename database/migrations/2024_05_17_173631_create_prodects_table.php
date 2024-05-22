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
        Schema::create('prodects', function (Blueprint $table) {
            $table->increments(column:'id');
            $table->integer(column:'product_id');
            $table->string(column:'name');
            $table->string(column:'Brand');
            $table->integer(column:'price');
            $table->string(column:'Color');
            $table->integer(column:'Screen size');
            $table->integer(column:'Ram');
            $table->integer(column:'Rear camera');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodects');
    }
};
