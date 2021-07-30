@includeIf('includes.head', ['title' => 'Iniciar sesión | Magenta - Sky'])

@includeIf('includes.navbar')

<main>
    <div class="container m-auto flex justify-center flex-col items-center font-medium">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center my-8">
            @if (session()->has('error'))
                <div class="bg-red-500 w-full p-3 mb-5 text-white text-center font-sairaBold">
                    {{ session()->get('error') }}
                </div>
            @endif
            @csrf
            <h1 class="uppercase font-extrabold text-3xl my-8 self-start">Iniciar Sesión</h1>
            <div class="flex flex-col">
                <label for="" class="mb-2">Correo electronico</label>
                <input type="email" name="email" id="username" autocomplete="email"
                    class="border-btn w-80 md:w-96 h-12 mb-8 form-control form__input @error('email') is-invalid @enderror">
                @error('email')
                    <span class="bg-red-500 w-full p-3 mb-5 text-white text-center font-sairaBold">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="" class="mb-2">Contraseña</label>
                <input type="password" name="password" id="password"
                    class="border-btn w-80 md:w-96 h-12 mb-8 form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password">
                @error('password')
                    <span class="bg-red-500 w-full p-3 mb-5 text-white text-center font-sairaBold ">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex items-center w-full mb-8 ml-2">
                <input class="mr-3" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="flex" for="remember">
                    Recuerdame
                </label>
            </div>
            <div class="flex justify-between w-full">
                <input type="submit" value="Iniciar sesión"
                    class="bg-gray-700 text-white py-2 px-5 font-bold w-32 hover:bg-gray-500 cursor-pointer">
                <div class="flex flex-col">
                    <a href="" class="">¿Olvidaste tu contraseña?</a>
                    <a href="{{ route('register') }}" class="">¿No tienes cuenta? Crea una</a>
                </div>
            </div>
            <div class="flex flex-col w-full">
                <p class="my-8">Tambien puedes iniciar sesión mediante</p>
                <a href="{{ route('login.facebook') }}"
                    class="py-2 px-5 flex items-center border-btn w-32 mb-5 font-bold">Facebook <div
                        class="relative left-5 text-2xl"><span class="iconify" data-icon="akar-icons:facebook-fill"
                            data-inline="false" style="color: #1F4FCC;"></span></div></a>
                <a href="{{ route('login.google') }}"
                    class="py-2 px-5 flex items-center border-btn w-32 font-bold">Google <div
                        class="relative left-8 text-2xl"><span class="iconify" data-icon="flat-color-icons:google"
                            data-inline="false"></div></span></a>
            </div>
        </form>
    </div>
</main>


@includeIf('includes.footer')
