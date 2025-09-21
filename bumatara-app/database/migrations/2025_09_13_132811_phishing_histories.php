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
        Schema::create('phishing_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_phishing');
            $table->unsignedBigInteger('id_kuota');
            $table->string('ip_address')->nullable();
            $table->string('device_info')->nullable();
            $table->string('last_update')->nullable();
            $table->timestamps();

            $table->foreign('id_phishing')->references('id')->on('core_phishings')->onDelete('cascade');
            $table->foreign('id_kuota')->references('id')->on('user_kuota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phishing_histories');
    }
};
