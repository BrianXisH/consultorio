<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterrogatorioPorSistemasAparato extends Model
{
    protected $table = 'interrogatorio_por_sistemas_aparatos';

    // Relación uno a muchos inversa con FichaIdentificacion
    public function fichaIdentificacion()
    {
        return $this->belongsTo(FichaIdentificacion::class);
    }
    
    use HasFactory;
}
