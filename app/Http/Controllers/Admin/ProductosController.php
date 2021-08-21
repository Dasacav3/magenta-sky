<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriaProducto;
use App\Models\OpcionesProducto;
use App\Models\Producto;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    public function index()
    {
        if (Auth::user()->rol == "admin") {
            $datos['productos'] = Producto::paginate(200);
            $categorias['categorias'] = CategoriaProducto::paginate(200);
            $categorias['opciones'] = OpcionesProducto::paginate(200);
            return view('admin.products', $datos, $categorias);
        }
        return redirect()->route('panel');
    }

    public function create(Request $request)
    {
        // return $request->all();
        $imagenes = $request->file('fotoProducto')->store('public/product_img');

        $url = Storage::url($imagenes);

        return $url;

    }

    public function addCategory(Request $request)
    {
        $categoria = new CategoriaProducto();
        $categoria->nombreCategoria = $request->nuevaCategoria;
        $categoria->save();
    }

    public function getall(Request $request)
    {
        $data = DB::table('productos')->select('id', 'sku', 'nombre', 'precio', 'cantidad', 'imagen', 'stock')->get();

        return response(json_encode($data), 200)->header('Content-type', 'text/plain');
    }
}
