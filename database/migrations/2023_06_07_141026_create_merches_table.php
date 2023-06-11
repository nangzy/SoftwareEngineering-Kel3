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
        Schema::create('merches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // 1 = mobile legends, 2 = valorant (jadi FK)
            $table->string('merch_name');
            $table->unsignedBigInteger('price');
            $table->string('size');
            $table->unsignedBigInteger('quantity');
            $table->string('organization');
            $table->string('item');
            $table->longText('description');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('game_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merches');
    }
};
