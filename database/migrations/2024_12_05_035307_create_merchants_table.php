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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('merchant_address');
            $table->string('merchant_phone');
            $table->string('merchant_image')->nullable();
            $table->string('merchant_description')->nullable();
            $table->string('merchant_logo')->nullable();
            $table->string('merchant_banner')->nullable();
            $table->string('merchant_status')->nullable();
            $table->string('merchant_category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
