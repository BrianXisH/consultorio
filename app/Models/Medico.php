<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

    // Relación uno a muchos con Consulta
    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
    
    use HasFactory;
}
