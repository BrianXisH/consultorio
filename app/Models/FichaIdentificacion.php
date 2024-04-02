<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaIdentificacion extends Model
{
    protected $table = 'fichas_identificacion';

    // Relación uno a muchos inversa con Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    // Relación uno a muchos con AntecedentePatologicoHereditario
    public function antecedentesPatologicosHereditarios()
    {
        return $this->hasMany(AntecedentePatologicoHereditario::class);
    }

    // Relación uno a muchos con AntecedentePersonalNoPatologico
    public function antecedentesPersonalesNoPatologicos()
    {
        return $this->hasMany(AntecedentePersonalNoPatologico::class);
    }

    // Relación uno a muchos con AntecedentePersonalPatologico
    public function antecedentesPersonalesPatologicos()
    {
        return $this->hasMany(AntecedentePersonalPatologico::class);
    }

    // Relación uno a muchos con ExploracionFisica
    public function exploracionesFisicas()
    {
        return $this->hasMany(ExploracionFisica::class);
    }

    // Relación uno a muchos con InterrogatorioPorSistemasAparato
    public function interrogatoriosPorSistemasAparatos()
    {
        return $this->hasMany(InterrogatorioPorSistemasAparato::class);
    }

    // Relación muchos a muchos con Enfermedad a través de FichaIdentificacionEnfermedad
    public function enfermedades()
    {
        return $this->belongsToMany(Enfermedad::class, 'fichas_identificacion_enfermedades');
    }

    use HasFactory;
}
