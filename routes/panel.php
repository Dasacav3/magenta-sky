<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name("panel");

Route::get('/pedidos', [HomeController::class, 'orders']);

Route::get('/perfil', [HomeController::class, 'profile']);
