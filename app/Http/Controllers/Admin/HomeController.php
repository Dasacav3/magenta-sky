<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaProducto;
use App\Models\Cliente;
use App\Models\MetodoPago;
use App\Models\OpcionesProducto;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.index');
        }
        return redirect()->route('panel');
    }

    public function customers()
    {
        if (Auth::user()->rol == "admin") {
            $datos['users'] = User::paginate(200);
            return view('admin.customers', $datos);
        }
        return redirect()->route('panel');
    }

    public function products()
    {
        if (Auth::user()->rol == "admin") {
            $datos['productos'] = Producto::paginate(200);
            $categorias['categorias'] = CategoriaProducto::paginate(200);
            $categorias ['opciones'] = OpcionesProducto::paginate(200);
            return view('admin.products', $datos, $categorias);
        }
        return redirect()->route('panel');
    }

    public function orders()
    {
        if (Auth::user()->rol == "admin") {
            $datos['pedidos'] = Pedido::paginate(200);
            $datos['metodos'] = MetodoPago::paginate(20);
            $datos['cliente'] = User::paginate(200);
            $datos['productos'] = Producto::paginate(200);
            return view('admin.orders', $datos);
        }
        return redirect()->route('panel');
    }

    public function statistics()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.statistics');
        }
        return redirect()->route('panel');
    }

    public function profile()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.profile');
        }
        return redirect()->route('panel');
    }
}
