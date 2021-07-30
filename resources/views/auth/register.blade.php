@includeIf('includes.head', ['title' => 'Crear cuenta | Magenta - Sky'])

@includeIf('includes.navbar')

<main class="w-full">
    <div class="container m-auto flex justify-center flex-col items-center font-medium">
        <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center items-center my-8">
            @csrf

            <h1 class="uppercase font-extrabold text-3xl my-8 text-center">{{ __('Crea tu cuenta') }}</h1>

            <div class="form-group row">
                <label for="name" class="mb-2">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text"
                        class="border-btn w-80 md:w-96 h-12 mb-8 form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="mb-2">{{ __('Correo electronico') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email"
                        class="border-btn w-80 md:w-96 h-12 mb-8 form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="mb-2">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                        class="border-btn w-80 md:w-96 h-12 mb-8 form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="mb-2">{{ __('Confirmar Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="border-btn w-80 md:w-96 h-12 mb-8 form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="flex items-center w-full mb-8 ml-2">
                <input class="mr-3" type="checkbox" name="tyc" id="tyc"
                    {{ old('tyc') ? 'checked' : '' }}>
                <label class="flex" for="tyc">
                    Acepto los terminos y condiciones
                </label>
            </div>

            <div class="flex justify-center w-full">
                <div class="col-md-6 offset-md-4">
                    <button type="submit"
                        class="bg-gray-700 text-white py-2 px-5 font-bold w-32 hover:bg-gray-500 cursor-pointer">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@includeIf('includes.footer')
