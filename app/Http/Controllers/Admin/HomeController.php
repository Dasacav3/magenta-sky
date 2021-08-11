<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            return view('admin.customers');
        }
        return redirect()->route('panel');
    }

    public function products()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.products');
        }
        return redirect()->route('panel');
    }

    public function sales()
    {
        if (Auth::user()->rol == "admin") {
            return view('admin.sales');
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
