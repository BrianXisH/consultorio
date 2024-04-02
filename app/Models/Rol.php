<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    // Relación muchos a muchos con Usuario
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_rol');
    }
    
    use HasFactory;
}
