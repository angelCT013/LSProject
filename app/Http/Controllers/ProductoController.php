<?php

namespace App\Http\Controllers;
// use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function addProducto(Request $request)
    {
        // Obtener los datos del formulario
        $nombre = $request->input('nombre');
        $numSerie = $request->input('numSerie');
        $status_id = $request->input('status_id');
        $modelo_id = $request->input('modelo_id');
        $categoria_id = $request->input('categoria_id');
        $imagen = $request->input('imagen');
        $descripcion = $request->input('descripcion');
        
        // Llamar al procedimiento almacenado para insertar el producto
        \DB::statement("CALL sp_insertar_producto(?, ?, ?, ?, ?, ?, ?)",
            [$nombre, $numSerie, $status_id, $modelo_id, $categoria_id, $imagen, $descripcion]
        );
        
        // Redirigir a la vista con un mensaje de éxito
        // return redirect()->route('ecommerce.addProducto');
        return redirect()->route('ecommerce.add_product',app()->getLocale())->with('success', 'Producto guardado exitosamente.');


        // return redirect()->back()->with('success', 'Producto agregado exitosamente.');
    }
}
