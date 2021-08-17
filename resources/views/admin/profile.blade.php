@includeIf('admin.head', ['title' => 'Perfil'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">

    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Perfil</h2>
    </div>
    <div class="container m-auto flex justify-center flex-col items-center font-medium">
        <form action="" class="flex flex-col justify-center items-center">
                <div class="flex flex-col">
                    <label for="" class="mb-2">Nombre</label>
                    <input type="text" name="username" id="username" class="border-btn w-80 md:w-96 h-12 mb-8" value="{{ Auth::user()->name }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Correo electronico</label>
                    <input type="email" name="email" id="email" class="border-btn w-80 md:w-96 h-12 mb-8"
                        value="{{ Auth::user()->email }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Telefono</label>
                    <input type="tel" name="tel" id="tel" class="border-btn w-80 md:w-96 h-12 mb-8" value="{{ Auth::user()->telefonoCliente }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="border-btn w-80 md:w-96 h-12 mb-8" value="{{ Auth::user()->ciudad }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="border-btn w-80 md:w-96 h-12 mb-8" value="{{ Auth::user()->direccion }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Codigo Postal</label>
                    <input type="text" name="direccion" id="direccion" class="border-btn w-80 md:w-96 h-12 mb-8" value="{{ Auth::user()->codigoPostal }}">
                </div>
                <div class="flex flex-col">
                    <img id="avatar" src="{{ Auth::user()->avatar }}" class="mb-8" style="width:100px; height:100px">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2"></label>
                    <input type="file" name="photo" id="photo" class="border-btn w-80 md:w-96 h-12 mb-8">
                </div>
                <div class="flex justify-center w-full">
                    <input type="submit" value="Actualizar"
                        class="bg-gray-700 text-white py-2 px-5 font-bold w-32 hover:bg-gray-500 cursor-pointer">
                </div>
        </form>
    </div>
</div>

</div>

@includeIf('admin.footer')
