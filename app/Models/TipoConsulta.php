<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConsulta extends Model
{
    protected $table = 'tipo_consultas';

    // Relación uno a muchos con Consulta
    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
    
    use HasFactory;
}
