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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedBigInteger('medico_id')->nullable();
            $table->unsignedBigInteger('tipo_consulta_id')->nullable();
            $table->text('receta')->nullable();
            $table->text('results')->nullable();
            $table->timestamps();
        
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('set null');
            $table->foreign('tipo_consulta_id')->references('id')->on('tipo_consultas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
