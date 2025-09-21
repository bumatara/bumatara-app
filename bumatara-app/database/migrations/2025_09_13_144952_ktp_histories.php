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
        Schema::create('ktp_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ktp');
            $table->unsignedBigInteger('id_kuota');
            $table->ipAddress('ip_address')->nullable();
            $table->string('device_info')->nullable();
            $table->timestamp('last_update')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();

            $table->foreign('id_ktp')->references('id')->on('core_ktps')->onDelete('cascade');
            //$table->foreign('id_kuota')->references('id')->on('user_kuota')->onDelete('cascade');

            $table->index(['id_ktp','created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp_histories');
    }
};
