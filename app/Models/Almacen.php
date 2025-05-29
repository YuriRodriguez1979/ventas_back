<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';

    protected $filleable = [
        'fecha',
        'detalle',
        'entrada_Cantidad',
        'entrada_valor_unitario',
        'entrada_valor_total',
        'salida_cantidad',
        'salida_valor_unitario',
        'salida_valor_total',
        'saldo_total',
        'id_producto'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
