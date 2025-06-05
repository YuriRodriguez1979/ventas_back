<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Categoria extends Model
{
    protected $table = 'tipo_categorias';

    protected $filleable = [
        'categoria',
        'modulo'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public $timestamps = false;
}
