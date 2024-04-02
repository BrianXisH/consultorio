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
        Schema::create('exploracion_fisica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_identificacion_id')->nullable();
            $table->boolean('cabeza_exostosis')->nullable();
            $table->boolean('cabeza_endostosis')->nullable();
            $table->boolean('craneo_dolicocefalico')->nullable();
            $table->boolean('craneo_mesocefalico')->nullable();
            $table->boolean('craneo_braquicefalico')->nullable();
            $table->boolean('cara_asimetrias_transversales')->nullable();
            $table->boolean('cara_asimetrias_longitudinales')->nullable();
            $table->boolean('perfil_concavo')->nullable();
            $table->boolean('perfil_convexo')->nullable();
            $table->boolean('perfil_recto')->nullable();
            $table->boolean('piel_normal')->nullable();
            $table->boolean('piel_palida')->nullable();
            $table->boolean('piel_cianotica')->nullable();
            $table->boolean('piel_enrojecida')->nullable();
            $table->boolean('musculos_hipotonicos')->nullable();
            $table->boolean('musculos_hipertonicos')->nullable();
            $table->boolean('musculos_espasticos')->nullable();
            $table->boolean('cuello_palpa_cadena_ganglionar')->nullable();
            $table->text('otros')->nullable();
            $table->timestamps();
        
            $table->foreign('ficha_identificacion_id')->references('id')->on('fichas_identificacion')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exploracion_fisica');
    }
};
