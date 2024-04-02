<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentePersonalNoPatologico extends Model
{
    protected $table = 'antecedentes_personales_no_patologicos';

    // Relación uno a muchos inversa con FichaIdentificacion
    public function fichaIdentificacion()
    {
        return $this->belongsTo(FichaIdentificacion::class);
    }
    
    use HasFactory;
}
