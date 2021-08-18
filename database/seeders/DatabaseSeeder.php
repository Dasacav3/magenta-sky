<?php

namespace Database\Seeders;

use App\Models\CategoriaProducto;
use App\Models\MetodoPago;
use App\Models\OpcionesProducto;
use App\Models\User;
use App\Models\ZonasEnvio;
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
        $admin = new User();
        $admin->name = "Daniel Santiago Carrillo Velasquez";
        $admin->email = "dscv3719@gmail.com";
        $admin->password = '$2y$10$e6J.gCiN7t2/d/Ra.GRFsOc4NuAWEIMHwivKCMQsBMqbTe2eYFYKm';
        $admin->rol = "admin";
        $admin->ciudad = "Bogota";

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
        $categoriaProducto_accesorio->nombreCategoria = "accesorio";
        $categoriaProducto_accesorio->save();

        $pagoContraEntrega = new MetodoPago();
        $pagoContraEntrega->nombre = "contraentrega";
        $pagoContraEntrega->descripcionMetodo = "Paga cuando tus productos lleguen a tu casa";
        $pagoContraEntrega->save();

        $pagoTransferencia = new MetodoPago();
        $pagoTransferencia->nombre = "transferencia";
        $pagoTransferencia->descripcionMetodo = "Realiza la transferencia a la cuenta bancaria para continuar tu proceso";
        $pagoTransferencia->save();

        $pagoMercadoPago = new MetodoPago();
        $pagoMercadoPago->nombre = "mercadopago";
        $pagoMercadoPago->descripcionMetodo = "Paga con el medio de pago que prefieras";
        $pagoMercadoPago->save();

        $pagoWompi = new MetodoPago();
        $pagoWompi->nombre = "wompi";
        $pagoWompi->descripcionMetodo = "Paga con Bancolombia a la mano junto a otros metodos";
        $pagoWompi->save();

        $zonaEnvioBogota = new ZonasEnvio();
        $zonaEnvioBogota->nombreZona = "Bogota DC";
        $zonaEnvioBogota->regionZona = "Bogota DC";
        $zonaEnvioBogota->metodosEnvio = "Terrestre";
        $zonaEnvioBogota->costoZonaEnvio = 10000;
        $zonaEnvioBogota->save();

        $zonaEnvioYopal = new ZonasEnvio();
        $zonaEnvioYopal->nombreZona = "Yopal";
        $zonaEnvioYopal->regionZona = "Casanare";
        $zonaEnvioYopal->metodosEnvio = "Terrestre";
        $zonaEnvioYopal->costoZonaEnvio = 25000;
        $zonaEnvioYopal->save();
    }
}
