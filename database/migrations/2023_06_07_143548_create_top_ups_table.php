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
        Schema::create('top_ups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_category_id'); // 1 = mobile legends, 2 = valorant (jadi FK)
            $table->string('image');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('price');    
            $table->string('in_game_id')->nullable();
            $table->string('server_id')->nullable();
            $table->string('riot_id')->nullable();
            $table->timestamps();

            $table->foreign('game_category_id')->references('id')->on('game_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_ups');
    }
};
