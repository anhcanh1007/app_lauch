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
        Schema::create('referral_bonuses', function (Blueprint $table) {
            $table->id();
            $table->integer('from_user_id')->unsigned()->nullable();
            $table->integer('to_user_id')->unsigned()->nullable();
            $table->integer('level')->nullable();
            $table->decimal('amount', 18, 8)->default(0.00000000);
            $table->decimal('main_balance', 18, 8)->default(0.00000000);
            $table->string('transaction', 20)->nullable();
            $table->string('type', 10)->nullable();
            $table->string('remarks', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_bonuses');
    }
};
