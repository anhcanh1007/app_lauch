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
        Schema::create('manage_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('badge', 191)->nullable();
            $table->string('minimum_amount', 20)->nullable();
            $table->string('maximum_amount', 20)->nullable();
            $table->string('fixed_amount', 20)->nullable();
            $table->decimal('profit', 11, 2)->default(0.00)->comment('Yield');
            $table->tinyInteger('profit_type')->default(0)->comment('1 for percent(%) / 0 for base currency');
            $table->integer('schedule')->nullable()->comment('Accrual');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_capital_back')->default(0);
            $table->tinyInteger('is_lifetime')->default(0);
            $table->integer('repeatable')->nullable()->default(1)->comment('maturity');
            $table->tinyInteger('featured')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_plans');
    }
};
