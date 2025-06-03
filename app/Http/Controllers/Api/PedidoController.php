<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\detalle_pedido;
use App\Models\pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function ListarPedidos(){
        $rpt = DB::table('pedidos')
               ->join('detalle_pedidos', 'pedidos.id', '=', 'detalle_pedidos.id_pedido')
               ->join('productos', 'productos.id', '=', 'detalle_pedidos.id_producto')
               ->select('pedidos.fecha', 'detalle_pedidos.cantidad', 'productos.producto', 'productos.unidad_medida', 
                        'productos.laboratorio', 'productos.generico', 'productos.comercial');

        return response()->json($rpt);
    }

    public function RegistrarPedidos( Request $request ){
        try{
            $request->validate([
                'fecha'=> 'required',
                'id_pedido' => 'required',
                'id_producto' => 'required',
                'cantidad' => 'required'
            ]);

            DB::beginTransaction();

            $pedido = new pedido();
            $pedido->fecha = $request->fecha;
            $pedido->save();

            $det_pedido = new detalle_pedido();
            $det_pedido->id_pedido = $request->id_pedido;
            $det_pedido->id_producto = $request->id_producto;
            $det_pedido->cantidad = $request->cantidad;
            $det_pedido->save();


        }catch(\Exception $e){
            DB::rollBack();
            return response()->json([
                "mensaje" => "Sucedio un error al almazenar la informacion"
            ]);
        }
    }
}
