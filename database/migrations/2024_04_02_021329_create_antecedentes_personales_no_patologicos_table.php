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
        Schema::create('antecedentes_personales_no_patologicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->string('habitos_higienicos_vestuario', 255)->nullable();
            $table->string('habitos_higienicos_lavado_dientes_frecuencia', 50)->nullable();
            $table->boolean('habitos_higienicos_utiliza_auxiliares_higiene_bucal')->nullable();
            $table->string('habitos_higienicos_auxiliares_higiene_bucal_cuales', 255)->nullable();
            $table->boolean('habitos_higienicos_consume_golosinas_otros_alimentos_comidas')->nullable();
            $table->string('grupo_sanguineo', 10)->nullable();
            $table->string('factor_rh', 10)->nullable();
            $table->boolean('cuenta_cartilla_vacunacion')->nullable();
            $table->boolean('esquema_completo')->nullable();
            $table->string('esquema_falta', 255)->nullable();
            $table->boolean('adicciones_tabaco')->nullable();
            $table->boolean('adicciones_alcohol')->nullable();
            $table->string('antecedentes_alergicos', 255)->nullable();
            $table->string('antecedentes_alergicos_antibioticos', 255)->nullable();
            $table->string('antecedentes_alergicos_analgesicos', 255)->nullable();
            $table->string('antecedentes_alergicos_anestesicos', 255)->nullable();
            $table->string('antecedentes_alergicos_alimentos', 255)->nullable();
            $table->string('antecedentes_alergicos_especifique', 255)->nullable();
            $table->boolean('hospitalizado')->nullable();
            $table->date('hospitalizado_fecha')->nullable();
            $table->string('hospitalizado_motivo', 255)->nullable();
            $table->string('padecimiento_actual', 255)->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id', 'fk_antecedentes_personales_no_patologicos_ficha_id')
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
        Schema::dropIfExists('antecedentes_personales_no_patologicos');
    }
};
