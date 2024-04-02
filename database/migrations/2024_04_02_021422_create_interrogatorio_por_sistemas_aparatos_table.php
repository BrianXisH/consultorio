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
        Schema::create('interrogatorio_por_sistemas_aparatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->string('interrogatorio_aparato_digestivo', 255)->nullable();
            $table->string('interrogatorio_aparato_respiratorio', 255)->nullable();
            $table->string('interrogatorio_cardiovascular', 255)->nullable();
            $table->string('interrogatorio_aparato_genitourinario', 255)->nullable();
            $table->string('interrogatorio_sistema_endocrino', 255)->nullable();
            $table->string('interrogatorio_sistema_hemepoyetico', 255)->nullable();
            $table->string('interrogatorio_sistema_nervioso', 255)->nullable();
            $table->string('interrogatorio_sistema_musculoesqueletico', 255)->nullable();
            $table->string('interrogatorio_sistema_tegumentario', 255)->nullable();
            $table->string('interrogatorio_aparato_tegumentario', 255)->nullable();
            $table->string('habitus_exterior', 255)->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('talla', 5, 2)->nullable();
            $table->string('complexion', 50)->nullable();
            $table->unsignedTinyInteger('frecuencia_cardiaca')->nullable();
            $table->string('tension_arterial', 20)->nullable();
            $table->unsignedTinyInteger('frecuencia_respiratoria')->nullable();
            $table->decimal('temperatura', 4, 2)->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id', 'fk_interrogatorio_por_sistemas_aparatos_ficha_id')
                ->references('id')
                ->on('fichas_identificacion')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interrogatorio_por_sistemas_aparatos');
    }
};
