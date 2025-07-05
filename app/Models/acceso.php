<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class acceso extends Model
{
    protected $table = 'accesos';

    protected $filleable = [
        'crear',
        'leer',
        'actualizar',
        'borrar',
        'id_rol',
        'id_submenu',
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
