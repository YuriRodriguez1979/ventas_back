<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{
    protected $table = 'detalle_ventas';

    protected $filleable = [
        'cantidad',
        'precio_unitario',
        'id_almacen',
        'id_venta'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
