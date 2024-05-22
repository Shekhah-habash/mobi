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
        Schema::create('mentinaneces', function (Blueprint $table) {
            $table->increments(column:'mentinanececenter_id') ->unsigned();
            $table->string(column:'center name');
            $table->string(column:'address');
            $table->string(column:'logo');
            $table->string(column:'review');
            $table->string(column:'contact info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentinaneces');
    }
};
