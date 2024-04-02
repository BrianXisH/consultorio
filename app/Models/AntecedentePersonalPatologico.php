<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentePersonalPatologico extends Model
{
    protected $table = 'antecedentes_personales_patologicos';

    // Relación uno a muchos inversa con FichaIdentificacion
    public function fichaIdentificacion()
    {
        return $this->belongsTo(FichaIdentificacion::class);
    }
    
    use HasFactory;
}
