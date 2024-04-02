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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->string('nombre_apellido_paterno', 50)->nullable();
            $table->string('nombre_apellido_materno', 50)->nullable();
            $table->string('nombre_nombres', 50)->nullable();
            $table->unsignedTinyInteger('edad_anios')->nullable();
            $table->unsignedTinyInteger('edad_meses')->nullable();
            $table->boolean('genero_masculino')->nullable();
            $table->boolean('genero_femenino')->nullable();
            $table->string('lugar_nacimiento_estado', 50)->nullable();
            $table->string('lugar_nacimiento_ciudad', 50)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('ocupacion', 50)->nullable();
            $table->string('escolaridad', 50)->nullable();
            $table->string('estado_civil', 20)->nullable();
            $table->string('domicilio_calle', 100)->nullable();
            $table->string('domicilio_num_exterior', 10)->nullable();
            $table->string('domicilio_num_interior', 10)->nullable();
            $table->string('domicilio_colonia', 50)->nullable();
            $table->string('domicilio_estado', 50)->nullable();
            $table->string('domicilio_mpio', 50)->nullable();
            $table->string('domicilio_delegacion', 50)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('telefono_oficina', 20)->nullable();
            $table->timestamps();
        
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
