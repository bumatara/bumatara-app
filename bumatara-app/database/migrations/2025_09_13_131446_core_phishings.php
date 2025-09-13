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
        Schema::create('core_phishings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            // $table->foreignId('id_user')->nullable()->constrained('users')->onDelete('set null');
            $table->string('create_ip')->nullable();
            $table->string('url');
            $table->string('prediction');
            $table->float('confidence');
            $table->string('domain')->nullable();
            $table->float('phishing_probability')->nullable();
            $table->json('nameservers')->nullable();
            $table->json('features')->nullable();
            $table->longText('extracted_content')->nullable();
            $table->float('adjusted_confidence')->nullable();
            $table->string('final_prediction')->nullable();
            $table->string('final_confidence')->nullable();
            $table->boolean('trusted_domain')->nullable();
            $table->longText('llm_analysis')->nullable();
            $table->string('create_user')->nullable();
            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_phishings');
    }
};
