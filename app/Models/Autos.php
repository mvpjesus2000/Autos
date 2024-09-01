<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autos extends Model
{
    use HasFactory;

    // Si el nombre de la tabla no sigue la convención plural de Laravel, 
    // puedes especificar el nombre de la tabla aquí.
    protected $table = 'autos';

    // Define los campos que se pueden asignar en masa
    protected $fillable = [
        'color', 'modelo', 'tamano', 'numero_placa', 'precio', 'tipo', 'marca', 'modelo_nombre',
    ];
}

