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
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('code', 191);
            $table->string('currency', 191);
            $table->string('symbol', 191);
            $table->text('parameters')->nullable();
            $table->text('extra_parameters')->nullable();
            $table->decimal('convention_rate', 18,8)->default(1.00000000);
            $table->text('currencies')->nullable();
            $table->decimal('min_amount', 18,8);
            $table->decimal('max_amount', 18,8);
            $table->decimal('percentage_charge', 8,4)->default(0.0000);
            $table->decimal('fixed_charge', 18,8)->default(0.00000000);
            $table->tinyInteger('status')->default(1)->comment('0: inactive, 1: active');
            $table->text('note');
            $table->string('image', 191)->nullable();
            $table->integer('sort_by')->default(1);
            $table->text('deposit_address')->nullable();
            $table->text('network')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gateways');
    }
};