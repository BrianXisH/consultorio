<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    // Relación uno a uno con Paciente
    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    // Relación muchos a muchos con Rol
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }
    use HasFactory;
}
