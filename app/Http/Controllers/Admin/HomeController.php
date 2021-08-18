<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            return view('admin.products', $datos);
        }
        return redirect()->route('panel');
    }

    public function orders()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.orders');
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
