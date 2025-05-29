<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $table = 'creditos';

    protected $filleable = [
        'fecha',
        'tipo_documento',
        'numero_documento',
        'monto',
        'numero_cuotas',
        'monto_cuota',
        'id_compra'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
