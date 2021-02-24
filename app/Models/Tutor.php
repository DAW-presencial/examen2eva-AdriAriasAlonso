<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'empresa',
        'nombre',
        'apellido1',
        'apellido2',
        'tipo_documento',
        'doc_identidad',
        'pais',
        'provincia',
        'municipio',
        'estado',
        'telefono',
        'email'
    ];
}
