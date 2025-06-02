<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tipo_Categoria;
use Illuminate\Http\Request;

class TipoCategoriaController extends Controller
{
    /************************************** LISTAR TIPOS CATEGORIAS ***************************************/
    public function Listar(){
        $rpt = Tipo_Categoria::all();
        return response()->json($rpt);
    }

    /************************************* FIN DEL COLDIGO PARA LISTAR TIPOS CATEGORIAS ******************************/

    /************************************** LISTAR REGISTRAR TIPOS CATEGORIAS ***************************************/
    public function Registrar( Request $request){
        //validando los datos
        $request->validate([
            'categoria' => 'required',
            "modulo" => "required",
        ]);

        //instanciamos el modelo y  cargamos los datos en la variable
        $rpt = new Tipo_Categoria();
        $rpt->categoria = $request->catergoria;
        $rpt->modulo = $request->nodulo;

        //guardamos el tipo_categoria
        $rpt->save();

        //emitimos la respuesta
        return response()->json(["mensaje"=> "Tipo de categoria registrado satisfactoriamente"]);
    }

    /************************************* FIN DEL COLDIGO PARA REGISTRAR TIPOS CATEGORIAS ******************************/

    /************************************** LISTAR REGISTRAR TIPOS CATEGORIAS ***************************************/
    public function Modificar( Request $request){
        //validando los datos
        $request->validate([
            'categoria' => 'required',
            "modulo" => "required",
            'cantidad' => 'required'
        ]);

        //instanciamos el modelo y  cargamos los datos en la variable
        $rpt = Tipo_Categoria::find($request->id);
        $rpt->categoria = $request->catergoria;
        $rpt->modulo = $request->nodulo;

        //guardamos el tipo_categoria
        $rpt->update();

        //emitimos la respuesta
        return response()->json(["mensaje"=> "Tipo de categoria modificada satisfactoriamente"]);
    }

    /************************************* FIN DEL COLDIGO PARA REGISTRAR TIPOS CATEGORIAS ******************************/
}
