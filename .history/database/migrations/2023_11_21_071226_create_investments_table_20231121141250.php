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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('plan_id')->nullable();
            $table->decimal('amount', 11, 2)->nullable();
            $table->decimal('profit', 11, 2)->nullable();
            $table->integer('maturity');
            $table->string('point_in_time', 50)->nullable();
            $table->string('point_in_text', 60);
            $table->integer('recurring_time')->default(0);
            $table->timestamp('afterward')->comment('CURRENT_TIMESTAMP');
            $table->timestamp('formerly')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 => Running, 0 => Completed');
            $table->tinyInteger('capital_back')->default(0)->comment('1 => YES, 0 => NO');
            $table->string('trx', 40)->nullable();
            $table->integer('typeWalletInvest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
