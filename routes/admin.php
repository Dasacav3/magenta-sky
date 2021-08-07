<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', [HomeController::class, 'index'])->name("admin");

Route::get('/clientes', [HomeController::class, 'customers'])->name("admin");

Route::get('/productos', [HomeController::class, 'products'])->name("admin");

Route::get('/ventas', [HomeController::class, 'sales'])->name("admin");

Route::get('/pedidos', [HomeController::class, 'orders'])->name("admin");

Route::get('/estadisticas', [HomeController::class, 'statistics'])->name("admin");

Route::get('/perfil', [HomeController::class, 'profile'])->name("admin");
