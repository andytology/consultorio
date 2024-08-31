<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    protected $table = 'consultas_dentales';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
        'motivo_consulta',
        'fecha_consulta',
        'estado',
    ];

    public $timestamps = true;
}

