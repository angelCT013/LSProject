<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'producto_id';
    public $timestamps = true;

    // Relación con la tabla 'categoria'
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'categoria_id');
    }

    // Relación con la tabla 'estatus'
    public function estatus()
    {
        return $this->belongsTo(Estatus::class, 'status_id', 'status_id');
    }

    // Relación con la tabla 'modelo'
    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id', 'modelo_id');
    }
}

