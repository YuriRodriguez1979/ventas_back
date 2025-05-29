<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedidos';

    protected $filleable = [
        'fecha'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
