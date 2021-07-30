@includeIf('includes.head', ['title' => 'Iniciar sesión | Magenta - Sky'])

<main>
    <div class="container m-auto flex justify-center flex-col items-center font-medium">
        <form action="" class="flex flex-col justify-center items-center my-8">
            <h1 class="uppercase font-extrabold text-3xl my-8 self-start">Iniciar Sesión</h1>
            <div class="flex flex-col">
                <label for="" class="mb-2">Correo electronico</label>
                <input type="email" name="username" id="username" class="border-btn w-80 md:w-96 h-12 mb-8">
            </div>
            <div class="flex flex-col">
                <label for="" class="mb-2">Contraseña</label>
                <input type="password" name="password" id="password" class="border-btn w-80 md:w-96 h-12 mb-8">
            </div>
            <div class="flex justify-between w-full">
                <input type="submit" value="Iniciar sesión" class="bg-gray-700 text-white py-2 px-5 font-bold w-32 hover:bg-gray-500 cursor-pointer">
                <div class="flex flex-col">
                    <a href="" class="">¿Olvidaste tu contraseña?</a>
                    <a href="" class="">¿No tienes cuenta? Crea una</a>
                </div>
            </div>
            <div class="flex flex-col w-full">
                <p class="my-8">Tambien puedes iniciar sesión mediante</p>
                <button class="py-2 px-5 flex items-center border-btn w-32 mb-5 font-bold">Facebook <div class="relative left-5 text-2xl"><span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false" style="color: #1F4FCC;"></span></div></button>
                <button class="py-2 px-5 flex items-center border-btn w-32 font-bold">Google <div class="relative left-8 text-2xl"><span class="iconify" data-icon="flat-color-icons:google" data-inline="false"></div></span></button>
            </div>
        </form>
    </div>
</main>


@includeIf('includes.footer')
