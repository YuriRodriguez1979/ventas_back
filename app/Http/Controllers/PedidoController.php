<?php

namespace App\Http\Controllers;

use App\Models\detalle_pedido;
use App\Models\pedido;

use Illuminate\Http\Request;


class PedidoController extends Controller
{
    public function ListarPedidos(){
        $listar = DB::table('pedidos')
                  ->join('detalle_pedidos', 'pedidos.id', '=', '')
    }
}
