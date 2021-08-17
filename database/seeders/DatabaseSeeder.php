<?php

namespace Database\Seeders;

use App\Models\CategoriaProducto;
use App\Models\OpcionesProducto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $opcionesProducto_S = new OpcionesProducto();
        $opcionesProducto_S->nombre = "tamaño";
        $opcionesProducto_S->descripcion = "S";
        $opcionesProducto_S->save();

        $opcionesProducto_M = new OpcionesProducto();
        $opcionesProducto_M->nombre = "tamaño";
        $opcionesProducto_M->descripcion = "M";
        $opcionesProducto_M->save();

        $opcionesProducto_L = new OpcionesProducto();
        $opcionesProducto_L->nombre = "tamaño";
        $opcionesProducto_L->descripcion = "L";
        $opcionesProducto_L->save();

        $opcionesProducto_XL = new OpcionesProducto();
        $opcionesProducto_XL->nombre = "tamaño";
        $opcionesProducto_XL->descripcion = "XL";
        $opcionesProducto_XL->save();

        $categoriaProducto_hombre = new CategoriaProducto();
        $categoriaProducto_hombre->nombreCategoria = "hombre";
        $categoriaProducto_hombre->save();

        $categoriaProducto_mujer = new CategoriaProducto();
        $categoriaProducto_mujer->nombreCategoria = "mujer";
        $categoriaProducto_mujer->save();

        $categoriaProducto_accesorio = new CategoriaProducto();
        $categoriaProducto_accesorio ->nombreCategoria = "accesorio";
        $categoriaProducto_accesorio ->save();
    }
}
