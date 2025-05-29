<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contado extends Model
{
    protected $table = 'contados';

    protected $filleable = [
        'fecha',
        'tipo_documento',
        'numero_documemto',
        'monto',
        'id_compra'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
