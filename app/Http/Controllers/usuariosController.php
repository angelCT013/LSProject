<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class usuariosController extends Controller
{
    public function obtenerUsuarios()
    {

        
        $usuarios = Usuarios::all();
        return response()->json($usuarios);
    }

}
