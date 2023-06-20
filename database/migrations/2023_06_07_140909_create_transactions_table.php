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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('game_category_id');
            $table->unsignedBigInteger('product_id');
            $table->string('item_name')->nullable(); // merch
            $table->string('size')->nullable(); // merch
            $table->string('event_name')->nullable(); // ticket
            $table->string('user_id_ml')->nullable(); // mobile legends 10 angka
            $table->string('server_id_mole')->nullable(); //mobile legends 4 angka
            $table->string('riot_id')->nullable(); // valorant
            $table->string('invoice');
            $table->unsignedBigInteger('quantity');
            $table->date('transaction_date');
            $table->unsignedBigInteger('transaction_type'); // 1 = ticket, 2 = merch, 3 = top up
            $table->unsignedBigInteger('real_price');
            $table->unsignedBigInteger('total_price');
            $table->string('payment_method'); //Payment Method QRIS, DANA, OVO
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
