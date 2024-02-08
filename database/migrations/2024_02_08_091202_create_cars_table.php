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
       Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string("name", 20);
    $table->integer("amount");
    $table->integer('type_id')->references('id')->on('types');
    $table->integer('color_id')->references('id')->on('types');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
