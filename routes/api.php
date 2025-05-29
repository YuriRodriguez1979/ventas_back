<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProveedorController;
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

});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
