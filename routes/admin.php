<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name("admin");

Route::get('/clientes', [HomeController::class, 'customers']);

Route::get('/productos', [HomeController::class, 'products']);

Route::get('/ventas', [HomeController::class, 'sales']);

Route::get('/pedidos', [HomeController::class, 'orders']);

Route::get('/estadisticas', [HomeController::class, 'statistics']);

Route::get('/perfil', [HomeController::class, 'profile']);
