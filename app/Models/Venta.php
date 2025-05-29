<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $filleable = [
        'igv',
        'sub_total',
        'total',
        'fecha',
        'id_cliente'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
