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
        Schema::create('fichas_identificacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedTinyInteger('fecha_dia')->nullable();
            $table->unsignedTinyInteger('fecha_mes')->nullable();
            $table->unsignedSmallInteger('fecha_anio')->nullable();
            $table->date('fecha_ultima_consulta')->nullable();
            $table->string('motivo_ultima_consulta', 255)->nullable();
            $table->timestamps();
        
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas_identificacion');
    }
};
