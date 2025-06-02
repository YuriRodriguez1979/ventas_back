<?php

use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProveedorController;
use App\Models\Tipo_Categoria;
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
    Route::post('crear_tipo_categoria', [Tipo_Categoria::class, 'Registrar']);
    Route::get('listar_tipo_categotia', [Tipo_Categoria::class, 'Listar']);
    Route::get('editar_tipo_categoria', [Tipo_Categoria::class, 'Modificar']);

    //rutas protegidas para prodcutos
    Route::get('listar_productos', [ProductoController::class, 'ListarProductos']);

});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
