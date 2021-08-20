<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $datos['productos'] = Producto::paginate(200);
        return view('index', $datos);
    }
}
