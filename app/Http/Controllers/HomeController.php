<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $datos['productos'] = Producto::paginate(200);
        return view('index', $datos);
    }


    public function detalle($sku)
    {

        $producto = Producto::where('sku', '=', $sku)->get();

        return view('detalles-producto', ['producto' => $producto[0]]);
    }

    public function terms()
    {
        return view('terms');
    }
}
