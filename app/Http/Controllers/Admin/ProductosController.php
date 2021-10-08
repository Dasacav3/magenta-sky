<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriaProducto;
use App\Models\CategoriaProductoHasProductos;
use App\Models\OpcionesProducto;
use App\Models\Producto;
use App\Models\ProductoHasOpcionesProductos;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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

    public function store(Request $request)
    {
        return $request->all();
    }

    public function create(Request $request)
    {
        $now = new \DateTime();
        $nombre = $now->getTimestamp() . "-" . $request->file('fotoProducto')->getClientOriginalName();
        $url = "/img/products_img/" . $nombre;
        $ruta = public_path() . $url;

        Image::make($request->file('fotoProducto')->getRealPath())->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($ruta);

        $producto = new Producto();
        $producto->nombre = $request->nombreProducto;
        $producto->sku = $request->skuProducto;
        $producto->precio = $request->precioProducto;
        $producto->stock = $request->stockProducto;
        $producto->cantidad = $request->cantidadProducto;
        $producto->descripcionCorta = $request->descripcionCorta;
        $producto->descripcionLarga = $request->descripcionLarga;
        $producto->imagen = $nombre;
        $producto->save();

        foreach ($request->categorias as $data) {
            $productoCategoria = new CategoriaProductoHasProductos();
            $productoCategoria->idCategoria_producto = $data;
            $productoCategoria->idProducto = $producto->id;
            $productoCategoria->save();
        }

        $productoOpciones = new ProductoHasOpcionesProductos();
        $productoOpciones->idOpciones_producto = $request->opcionesProducto;
        $productoOpciones->idProducto = $producto->id;
        $productoOpciones->save();

        return redirect()->action([ProductosController::class, 'index']);
    }

    public function get(Producto $producto)
    {
        $categorias['categorias'] = CategoriaProducto::paginate(200);
        $categorias['opciones'] = OpcionesProducto::paginate(200);
        return view('admin.product-edit', ['producto' => $producto], $categorias);
    }

    public function edit(Request $request, Producto $producto)
    {

        if ($request->photo_product != null) {
            $now = new \DateTime();
            $name_photo = $now->getTimestamp() . "-" . $request->file('photo_product')->getClientOriginalName();
            $url = "/img/products_img/" . $name_photo;
            $ruta = public_path() . $url;

            Image::make($request->file('photo_product')->getRealPath())->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($ruta);

            $producto->imagen = $name_photo;
        }

        $producto->id = $request->id_product;
        $producto->nombre = $request->name_product;
        $producto->precio = $request->price_product;
        $producto->cantidad = $request->cant_product;
        $producto->sku = $request->sku_product;
        $producto->stock = $request->stock_product;
        $producto->descripcionCorta = $request->short_des;
        $producto->descripcionLarga = $request->long_des;
        $producto->save();

        return redirect()->route('producto.show', $producto);
    }

    public function addCategory(Request $request, Producto $producto)
    {
        $categoria = new CategoriaProducto();
        $categoria->nombreCategoria = $request[0];
        $categoria->save();
    }

    public function getall(Request $request)
    {
        $data = DB::table('productos')->select('id', 'sku', 'nombre', 'precio', 'cantidad', 'imagen', 'stock')->get();

        return response(json_encode($data), 200)->header('Content-type', 'text/plain');
    }
}
