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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses');
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->string('destination');
            $table->date('reservation_date');
            $table->time('departure_time');
            $table->integer('price');
            $table->date('departure_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
