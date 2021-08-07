<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function customers(){
        return view('admin.customers');
    }

    public function products(){
        return view('admin.products');
    }

    public function sales(){
        return view('admin.sales');
    }

    public function orders(){
        return view('admin.orders');
    }

    public function statistics(){
        return view('admin.statistics');
    }

    public function profile(){
        return view('admin.profile');
    }
}
