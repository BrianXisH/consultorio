<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';

    // Relación uno a muchos inversa con Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    // Relación uno a muchos inversa con Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    // Relación uno a muchos inversa con TipoConsulta
    public function tipoConsulta()
    {
        return $this->belongsTo(TipoConsulta::class);
    }
    
    use HasFactory;
}
