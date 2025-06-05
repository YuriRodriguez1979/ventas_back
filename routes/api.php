<?php

use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProveedorController;
use App\Http\Controllers\Api\TipoCategoriaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);

    //rutas protegidas de proveedores
    Route::post('crear_proveedor', [ProveedorController::class, 'CrearProveedor']);
    Route::get('listar_proveedores', [ProveedorController::class, 'Listar']);
    Route::put('editar_proveedor', [ProveedorController::class, 'Editar']);

    //rutas protegidas de tipo_categoria
    Route::post('crear_tipo_categoria', [TipoCategoriaController::class, 'Registrar']);
    Route::get('listar_tipo_categotia', [TipoCategoriaController::class, 'Listar']);
    Route::put('editar_tipo_categoria', [TipoCategoriaController::class, 'Modificar']);

    //rutas protegidas para productos
    Route::get('listar_productos', [ProductoController::class, 'ListarProductos']);


    //rutas protegidas para pedidos
    Route::get('ListarPedidos', [PedidoController::class, 'ListarPedidos']);
    Route::post('registrar_pedidos', [PedidoController::class, 'RegistrarPedidos']);
    
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
