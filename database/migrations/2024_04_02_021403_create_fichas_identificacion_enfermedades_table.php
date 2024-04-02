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
        Schema::create('fichas_identificacion_enfermedades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->unsignedBigInteger('enfermedad_id')->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id', 'fk_fichas_identificacion_enfermedades_ficha_id')
                ->references('id')
                ->on('fichas_identificacion')
                ->onDelete('set null');
        
            $table->foreign('enfermedad_id', 'fk_fichas_identificacion_enfermedades_enfermedad_id')
                ->references('id')
                ->on('enfermedades')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas_identificacion_enfermedades');
    }
};
