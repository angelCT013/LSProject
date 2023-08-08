<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class productosController extends Controller
{
    public function obtenerProductos()
    {
        $productos = Productos::all();
        
        return response()->json($productos);
    }
}
