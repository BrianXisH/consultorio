<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    // Relación uno a uno inversa con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Relación uno a muchos con FichaIdentificacion
    public function fichasIdentificacion()
    {
        return $this->hasMany(FichaIdentificacion::class);
    }

    // Relación uno a muchos con Consulta
    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
    use HasFactory;
}
