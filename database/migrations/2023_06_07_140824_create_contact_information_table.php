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
        Schema::create('contact_information', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('country');
            $table->string('city');
            $table->string('regency');
            $table->string('postal_code');
            $table->string('address');
            $table->string('phone_number');
            $table->string('shipping_method');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};
