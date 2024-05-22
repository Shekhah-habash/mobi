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
        Schema::create('favoriteproducts', function (Blueprint $table) {
            $table->increments(column:'favoriteproduct_id');
            $table->integer(column:'favoritelist_id') ->unique();
            $table->integer(column:'product_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoriteproducts');
    }
};
