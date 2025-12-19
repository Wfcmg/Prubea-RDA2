<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'problema',
        'cliente_nombre',
        'cliente_telefono',
        'estado'
    ];

    protected $casts = [
        'fecha_ingreso' => 'datetime',
    ];
}
