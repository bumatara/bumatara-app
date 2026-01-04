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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('link')->nullable();
            $table->integer('kategori')->nullable();
            $table->integer('palylist')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('create_user')->nullable();
            $table->string('last_user')->nullable();
            $table->timestamp('last_update')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
            $table->boolean('sts_active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
