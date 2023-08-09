<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'vProductos';
    protected $primaryKey = 'producto_id';
    public $timestamps = true;

    // Relación con la tabla 'categoria'

}

