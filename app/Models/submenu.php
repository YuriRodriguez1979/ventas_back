<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    protected $table = 'submenus';

    protected $filleable = [
        'descripcion',
        'id_menu'
    ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
