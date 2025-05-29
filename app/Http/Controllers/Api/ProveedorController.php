<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /************************************** LISTAR PROVEEDORES ***************************************/
    public function Listar(){
        $rpt = Proveedor::all();
        return response()->json($rpt);
    }

    /************************************* FIN DEL COLDIGO PARA LISTAR ******************************/

    /************************************** REGISTAR PROVEEDORES ***************************************/
    public function CrearProveedor( Request $request ){
        //validamos los datos ingresados
        $request->validate([
            'ruc' => 'required|unique:proveedores',
            'razon_social' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'fijo' => 'required',
            'movil' => 'required'
        ]);

        //instanciamos el objeto proveedor
        $proveedor = new Proveedor();

        //recibimos y cargamos los datos ya validados
        $proveedor->ruc = $request->ruc;
        $proveedor->razon_social = $request->razon_social;
        $proveedor->direccion = $request->direccion;
        $proveedor->email = $request->email;
        $proveedor->fijo = $request->fijo;
        $proveedor->movil = $request->movil;

        //grabamos en la base de datos
        $proveedor->save();
        //retornamos la respuesta
        return response()->json( ['mensaje' => 'Proveedor registrado con exito'] );
    }

    /************************************** FIN DEL COSIGO PARA REGISTAR PROVEEDORES ***************************************/

    /************************************** MODIFICAR PROVEEDORES ***************************************/
    public function Editar( Request $request ){
         //validamos los datos ingresados
        $request->validate([
            'ruc' => 'required',
            'razon_social' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'fijo' => 'required',
            'movil' => 'required'
        ]);

        //buscamos el registro con el id que coincida
        $edit = Proveedor::find($request->id);
        $edit->razon_social = $request->razon_social;
        $edit->direccion = $request->direccion;
        $edit->email = $request->email;
        $edit->fijo = $request->fijo;
        $edit->movil = $request->movil;
        //actualizamos el registro
        $edit->update();
        //retornamos el respuesta
         return response()->json( ['mensaje' => 'Proveedor modificado con exito'] );
    }

    /************************************** FIN CODIGO PARA MODIFICAR PROVEEDORES ***************************************/
}
