<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $filleable = [
        'producto',
        'unidad_medida',
        'laboratorio',
        'generico',
        'comercial',
        'id_proveedor',
        'id_tipocategoria'

    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
