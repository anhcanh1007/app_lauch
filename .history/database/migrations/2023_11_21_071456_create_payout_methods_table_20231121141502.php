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
        Schema::create('payout_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->nullable();
            $table->string('image', 191)->nullable();
            $table->decimal('minimum_amount', 11, 2)->nullable();
            $table->decimal('maximum_amount', 11, 2)->nullable();
            $table->decimal('fixed_charge', 11, 2)->nullable();
            $table->decimal('percent_charge', 11, 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->text('input_form');
            $table->text('duration')->nullable();
            $table->text('network')->nullable();
            $table->string('currency', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payout_methods');
    }
};
