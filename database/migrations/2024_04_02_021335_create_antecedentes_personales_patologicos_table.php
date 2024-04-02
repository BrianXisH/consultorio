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
        Schema::create('antecedentes_personales_patologicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->string('enfermedades_inflamatorias_infecciosas_no_trasmisibles', 255)->nullable();
            $table->string('enfermedades_trasmision_sexual', 255)->nullable();
            $table->string('enfermedades_degenerativas', 255)->nullable();
            $table->string('enfermedades_neoplasicas', 255)->nullable();
            $table->string('enfermedades_congenitas', 255)->nullable();
            $table->string('otras', 255)->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id', 'fk_antecedentes_personales_patologicos_ficha_id')
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
        Schema::dropIfExists('antecedentes_personales_patologicos');
    }
};
