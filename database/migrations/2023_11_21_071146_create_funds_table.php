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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('gateway_id')
                ->constrained('gateways')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('plan_id')->nullable();
            $table->string('gateway_currency', 191)->nullable();
            $table->decimal('amount', 18, 8)->default(0.00000000);
            $table->decimal('charge', 18, 8)->default(0.00000000);
            $table->decimal('rate', 18, 8)->default(0.00000000);
            $table->decimal('final_amount', 18, 8)->default(0.00000000);
            $table->decimal('btc_amount', 18, 8)->nullable();
            $table->string('btc_wallet', 191)->nullable();
            $table->string('transaction', 25)->nullable();
            $table->integer('try')->nullable();
            $table->tinyInteger('status')->default(0)->comment('1=> Complete, 2=> Pending, 3=> Cancel');
            $table->text('detail')->nullable();
            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
