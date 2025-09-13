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
        Schema::create('core_ktp', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('nik', 16)->unique();
            $table->string('nama', 100);
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jk', ['L','P'])->nullable()->comment('L=laki-laki, P=perempuan');

            $table->text('alamat')->nullable();
            $table->string('desa', 100)->nullable();
            $table->string('kec', 100)->nullable();

            $table->enum('agama', ['Islam','Kristen','Katolik','Hindu','Buddha','Khonghucu'])->nullable();
            $table->enum('sts_kawin', ['Belum Kawin','Kawin','Cerai Hidup','Cerai Mati'])->nullable();

            $table->string('pekerjaan', 120)->nullable();
            $table->string('warganegara', 30)->default('WNI');
            $table->string('masa_berlaku', 30)->nullable(); // Seumur Hidup

            $table->string('create_user', 100)->nullable();
            $table->timestamp('last_update')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();

            // index pencarian
            $table->index('nama');
            $table->index(['kec','desa']);
            $table->index('tgl_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_ktp');
    }
};
