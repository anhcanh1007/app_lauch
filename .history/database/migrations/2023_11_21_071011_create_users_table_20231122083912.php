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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 60)->nullable();
            $table->string('lastname', 60)->nullable();
            $table->string('username', 60)->nullable();
            $table->integer('referral_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('country_code', 20)->nullable();
            $table->string('phone_code', 20)->nullable();
            $table->string('phone', 91)->nullable();
            $table->decimal('balance', 11, 2)->default(0);
            $table->decimal('interest_balance', 11, 2)->default();
            $table->string('image', 191)->nullable();
            $table->text('address')->nullable();
            $table->string('provider', 191)->nullable();
            $table->string('provider_id', 191)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('two_fa')->default(0)->comment('0: two-FA off, 1: two-FA on');
            $table->boolean('two_fa_verify')->default(1)->comment('0: two-FA unverified, 1: two-FA verified');
            $table->string('two_fa_code', 50)->nullable();
            $table->boolean('email_verification')->default(1);
            $table->boolean('sms_verification')->default(1);
            $table->string('verify_code', 50)->nullable();
            $table->dateTime('send_at')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('password', 191)->nullable();
            $table->string('ref')
            $table->timestamp('email_verified_at')->nullable();
            $table->string('remember_token', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};