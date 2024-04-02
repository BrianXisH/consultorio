<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploracionFisica extends Model
{
    protected $table = 'exploracion_fisica';

    // Relación uno a muchos inversa con FichaIdentificacion
    public function fichaIdentificacion()
    {
        return $this->belongsTo(FichaIdentificacion::class);
    }
    
    use HasFactory;
}
