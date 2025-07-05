<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menus';

    protected $filleable = [
        'descripcion'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
