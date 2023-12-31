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
        Schema::create('money_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->unsigned()->nullable();
            $table->integer('receiver_id')->unsigned()->nullable();
            $table->decimal('amount', 11, 2)->nullable();
            $table->decimal('charge', 11, 2)->nullable();
            $table->string('trx', 20)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_transfers');
    }
};