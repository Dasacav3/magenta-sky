<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->rol == "customer") {
            return view('panel.index');
        }
        return redirect()->route('admin');
    }

    public function products()
    {
        if (Auth::user()->rol == "customer") {
            return view('panel.products');
        }
        return redirect()->route('admin');
    }

    public function orders()
    {
        if (Auth::user()->rol == "customer") {
            return view('panel.orders');
        }
        return redirect()->route('admin');
    }

    public function profile()
    {
        if (Auth::user()->rol == "customer") {
            return view('panel.profile');
        }
        return redirect()->route('admin');
    }
}
