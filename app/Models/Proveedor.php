<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $filleable = [
        'ruc',
        'razon_social',
        'direccion',
        'email',
        'fijo',
        'movil',
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public $timestamps = false;

}
