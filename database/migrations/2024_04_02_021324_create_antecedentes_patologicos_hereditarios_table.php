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
        Schema::create('antecedentes_patologicos_hereditarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->string('madre', 255)->nullable();
            $table->string('padre', 255)->nullable();
            $table->string('hermanos', 255)->nullable();
            $table->string('hijos', 255)->nullable();
            $table->string('esposo_a', 255)->nullable();
            $table->string('tios', 255)->nullable();
            $table->string('abuelos', 255)->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id', 'fk_antecedentes_patologicos_hereditarios_ficha_id')
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
        Schema::dropIfExists('antecedentes_patologicos_hereditarios');
    }
};
