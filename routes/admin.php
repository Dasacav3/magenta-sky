<?php

use App\Http\Controllers\Admin\CategoriaProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductosController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes in the views /admin
|
*/

Route::get('/', [HomeController::class, 'index'])->name("admin");

Route::get('/clientes', [HomeController::class, 'customers']);

Route::get('/productos', [ProductosController::class, 'index']);

Route::post('/productos/create', [ProductosController::class, 'create'])->name("productos.create");

Route::post('/productos/categoria/add', [ProductosController::class, 'addCategory']);

Route::post('/productos/get', [ProductosController::class, 'getall'])->name("productos.get");

Route::get('/pedidos', [HomeController::class, 'orders']);

Route::get('/estadisticas', [HomeController::class, 'statistics']);

Route::get('/perfil', [HomeController::class, 'profile']);
