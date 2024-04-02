<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedades';

    // Relación muchos a muchos con FichaIdentificacion a través de FichaIdentificacionEnfermedad
    public function fichasIdentificacion()
    {
        return $this->belongsToMany(FichaIdentificacion::class, 'fichas_identificacion_enfermedades');
    }
    
    use HasFactory;
}
