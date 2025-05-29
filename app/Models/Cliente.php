<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $filleable = [
        'documento',
        'ape_nombres',
        'movil',
        'email'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
