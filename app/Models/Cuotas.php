<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuotas extends Model
{
    protected $table = 'creditos';

    protected $filleable = [
        'fecha',
        'tipo_documento',
        'numero_documento',
        'monto',
        'numero_cuotas',
        'monto_cuota',
        'id_compras'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
