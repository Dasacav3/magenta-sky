<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        // return $request->all();
        // $imagenes = $request->file('fotoProducto')->store('public/product_img');

        // $url = Storage::url($imagenes);

        // return $url;


    }
}
