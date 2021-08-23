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
        $admin->save();

        $opcionesProducto_S = new OpcionesProducto();
        $opcionesProducto_S->nombre = "S";
        $opcionesProducto_S->descripcion = "Tamaño";
        $opcionesProducto_S->save();

        $opcionesProducto_M = new OpcionesProducto();
        $opcionesProducto_M->nombre = "M";
        $opcionesProducto_M->descripcion = "Tamaño";
        $opcionesProducto_M->save();

        $opcionesProducto_L = new OpcionesProducto();
        $opcionesProducto_L->nombre = "L";
        $opcionesProducto_L->descripcion = "Tamaño";
        $opcionesProducto_L->save();

        $opcionesProducto_XL = new OpcionesProducto();
        $opcionesProducto_XL->nombre = "XL";
        $opcionesProducto_XL->descripcion = "Tamaño";
        $opcionesProducto_XL->save();

        $opcionesProducto_Talla1 = new OpcionesProducto();
        $opcionesProducto_Talla1 ->nombre = "5-35";
        $opcionesProducto_Talla1 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla1 ->save();

        $opcionesProducto_Talla2 = new OpcionesProducto();
        $opcionesProducto_Talla2 ->nombre = "5.5-35.5";
        $opcionesProducto_Talla2 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla2 ->save();

        $opcionesProducto_Talla3 = new OpcionesProducto();
        $opcionesProducto_Talla3 ->nombre = "6-36";
        $opcionesProducto_Talla3 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla3 ->save();

        $opcionesProducto_Talla4 = new OpcionesProducto();
        $opcionesProducto_Talla4 ->nombre = "6.5-37";
        $opcionesProducto_Talla4 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla4 ->save();

        $opcionesProducto_Talla5 = new OpcionesProducto();
        $opcionesProducto_Talla5 ->nombre = "7-37.5";
        $opcionesProducto_Talla5 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla5 ->save();

        $opcionesProducto_Talla6 = new OpcionesProducto();
        $opcionesProducto_Talla6 ->nombre = "7.5-38";
        $opcionesProducto_Talla6 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla6 ->save();

        $opcionesProducto_Talla7 = new OpcionesProducto();
        $opcionesProducto_Talla7 ->nombre = "8-38.5";
        $opcionesProducto_Talla7 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla7 ->save();

        $opcionesProducto_Talla8 = new OpcionesProducto();
        $opcionesProducto_Talla8 ->nombre = "8.5-39";
        $opcionesProducto_Talla8 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla8 ->save();

        $opcionesProducto_Talla9 = new OpcionesProducto();
        $opcionesProducto_Talla9 ->nombre = "9-40";
        $opcionesProducto_Talla9 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla9 ->save();

        $opcionesProducto_Talla10 = new OpcionesProducto();
        $opcionesProducto_Talla10 ->nombre = "9.5-41";
        $opcionesProducto_Talla10 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla10 ->save();

        $opcionesProducto_Talla11 = new OpcionesProducto();
        $opcionesProducto_Talla11 ->nombre = "10-42";
        $opcionesProducto_Talla11 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla11 ->save();

        $opcionesProducto_Talla12 = new OpcionesProducto();
        $opcionesProducto_Talla12 ->nombre = "10.5-43";
        $opcionesProducto_Talla12 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla12 ->save();

        $opcionesProducto_Talla13 = new OpcionesProducto();
        $opcionesProducto_Talla13 ->nombre = "12-44";
        $opcionesProducto_Talla13 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla13 ->save();

        $opcionesProducto_Talla14 = new OpcionesProducto();
        $opcionesProducto_Talla14 ->nombre = "13-45";
        $opcionesProducto_Talla14 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla14 ->save();

        $opcionesProducto_Talla15 = new OpcionesProducto();
        $opcionesProducto_Talla15 ->nombre = "14-46.5";
        $opcionesProducto_Talla15 ->descripcion = "Calzado US/Europe";
        $opcionesProducto_Talla15 ->save();

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
