{{-- @extends('layouts.app')
@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-center">
                <a href="" aria-label="Space">
                    <img class="mb-3 logo-image" src="{{ URL::to('/img/favicon.png') }}" alt="Logo" width="60"
                        height="60">
                </a>
            </div>
            <div class="text-center mb-4">
                <h1 class="h3 mb-0">Please sign in</h1>
                <p>Signin to manage your account.</p>
            </div>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif


            <div class="js-form-message mb-3">
                <div class="js-focus-state input-group form">
                    <div class="input-group-prepend form__prepend">
                        <span class="input-group-text form__text">
                            <i class="fa fa-envelope form__text-inner"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control form__input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="Email" autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Password" autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <!-- Checkbox -->
                    <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <!-- End Checkbox -->
                </div>
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary login-btn btn-block">Signup</button>
            </div>
            <div class="text-center mb-3">
                <p class="text-muted">Have an account? <a href="{{ route('register') }}">Signin</a></p>
            </div>
            <div class="or-seperator"><i>OR</i></div>
            <div class="row mx-gutters-2 mb-4">
                <div class="col-sm-4">
                    <a href="{{ route('login.google') }}">
                        <button type="button" class="btn btn-block btn-google">
                            <i class="fa fa-google mr-2"></i>Google
                        </button>
                    </a>
                </div>
            </div>
            <div class="row mx-gutters-2 mb-4">
                <div class="col-sm-12">
                    <a href="{{ route('login.facebook') }}">
                        <button type="button" class="btn btn-block btn-facebook">
                            <i class="fa fa-facebook mr-2"></i>Facebook
                        </button>
                    </a>
                </div>
            </div>
            <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2021 soengsouy.com.</p>
        </form>
    </div>
@endsection --}}


@includeIf('includes.head', ['title' => 'Iniciar sesión | Magenta - Sky'])

@includeIf('includes.navbar')

<main>
    <div class="container m-auto flex justify-center flex-col items-center font-medium">
        @if (session()->has('error'))
            <div class="bg-red-500">
                {{ session()->get('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center my-8">
            @csrf
            <h1 class="uppercase font-extrabold text-3xl my-8 self-start">Iniciar Sesión</h1>
            <div class="flex flex-col">
                <label for="" class="mb-2">Correo electronico</label>
                <input type="email" name="username" id="username" class="border-btn w-80 md:w-96 h-12 mb-8">
            </div>
            <div class="flex flex-col">
                <label for="" class="mb-2">Contraseña</label>
                <input type="password" name="password" id="password" class="border-btn w-80 md:w-96 h-12 mb-8">
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">
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
