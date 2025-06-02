<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    protected $table = 'detalle_pedidos';

    protected $filleable = [
        'idpedido',
        'idproducto',
        'cantidad'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
