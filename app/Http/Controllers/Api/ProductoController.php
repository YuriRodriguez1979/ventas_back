<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Proveedor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    public function ListarProductos(){
        $productos = DB::table('productos')
        ->join('proveedores','proveedores.id', '=', 'productos.id_proveedor')
        ->join('tipo_categorias', 'tipo_categorias.id', '=', 'productos.id_tipocategria')
        ->select('id', 'producto', 'unidad_medida', 'laboratorio', 'generico', 'comercial', 'razon_social', 'categoria');

         return response()->json($productos);
    }

    public function RegistrarProductos( Request $request ){
        $request->validate([
            'producto'=>'required',
            'unidad_medida' => 'required',
            'laboratorio' => 'required',
            'generico',
            'comercial',
            'id_proveedor' => 'required',
            'id_tipocategoria' => 'required'
        ]);

        $producto = new Producto();

        $producto->producto = $request->producto;
        $producto->unidad_medida  = $request->unidad_medida;
        $producto->laboratorio  = $request->laboratorio;
        $producto->generico  = $request->generico;
        $producto->comercial  = $request->comercial;
        $producto->id_proveedor  = $request->id_proveedor;
        $producto->id_tipocategotia  = $request->id_tipocategotia;

        $producto->save();

        return response()->json([
            "mensaje" => "Productos registrado con exito"
        ]);
    }

    public function EditarProductos( Request $request ){
        $request->validate([
            'producto'=>'required',
            'unidad_medida' => 'required',
            'laboratorio' => 'required',
            'generico',
            'comercial',
            'id_proveedor' => 'required',
            'id_tipocategoria' => 'required'
        ]);

        $productoEditar = Producto::find($request->id);
        $productoEditar->producto = $request->producto;
        $productoEditar->unidad_medida  = $request->unidad_medida;
        $productoEditar->laboratorio  = $request->laboratorio;
        $productoEditar->generico  = $request->generico;
        $productoEditar->comercial  = $request->comercial;
        $productoEditar->id_proveedor  = $request->id_proveedor;
        $productoEditar->id_tipocategotia  = $request->id_tipocategotia;

        $productoEditar->edit();

         return response()->json([
            "mensaje" => "Productos modificado con exito"
        ]);

    }

}
