<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Tabel Users

        // Tabel User Kuota
        Schema::create('user_kuota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('user');
            $table->integer('kuota')->default(0);
            $table->boolean('sts_delete')->default(0);
            $table->timestamps();
            $table->string('create_user')->nullable();
            $table->string('last_update')->nullable();
            $table->string('last_user')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });

        // Tabel Audit Trail
        Schema::create('audit_trail', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->string('tabel_name');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamps();
            $table->string('create_user')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_info')->nullable();
        });

        // Tabel prm_core
        Schema::create('prm_core', function (Blueprint $table) {
            $table->id();
            $table->string('parameter');
            $table->text('content')->nullable();
            $table->boolean('sts_delete')->default(0);
            $table->timestamps();
            $table->string('create_user')->nullable();
            $table->string('last_update')->nullable();
            $table->string('last_user')->nullable();
        });

        // Tabel ip_logs
        Schema::create('ip_logs', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('device')->nullable();
            $table->string('platform')->nullable();
            $table->string('browser')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ip_logs');
        Schema::dropIfExists('prm_core');
        Schema::dropIfExists('audit_trail');
        Schema::dropIfExists('user_kuota');
    }
};
