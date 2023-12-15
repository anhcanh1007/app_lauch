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
        Schema::create('payout_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('method_id')->unsigned()->nullable();
            $table->decimal('amount', 11, 2)->nullable();
            $table->decimal('charge', 11, 2)->nullable();
            $table->decimal('net_amount', 11, 2)->nullable();
            $table->text('information')->nullable();
            $table->text('feedback')->nullable();
            $table->string('trx_id', 50)->nullable();
            $table->tinyInteger('status')->comment('1 => pending, 2 => success, 3 => cancel');
            $table->string('balance_type', 25)->nullable();
            $table->text('wallet_withdraw')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payout_logs');
    }
};
