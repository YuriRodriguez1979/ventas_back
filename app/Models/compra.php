<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = 'compras';

    protected $filleable = [
        'iddetalle_pedido',
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
