<div class="grid grid-cols-3 md:grid-cols-6 auto-rows-min">
    <aside id="admin-menu"
        class="absolute z-10 md:static flex justify-center flex-col h-screen w-screen md:w-full bg-red-300 items-center h-screen md:col-span-1 hidden md:block shadow-inner row-span-3">
        <div class="hidden text-white border-4 border-solid px-3 rounded-full" id="btn-admin-menu-close"><i
                class="fas fa-times"></i></div>
        <h1
            class="font-sairaBold text-xl xl:text-3xl uppercase flex items-center text-white text-shadow my-5 flex-col xl:flex-row justify-center">
            <img src="/img/favicon.png" alt="Magenta Sky" class="xl:mr-4 shadow-xl rounded-full w-20 lg:w-30"> Magenta
            Sky
        </h1>
        <ul
            class="flex justify-center flex-col md:initial md:self-start ml-2 lg:ml-10 text-lg lg:text-xl leading-loose text-gray-700">
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin"><i class="fas fa-tachometer-alt"></i>
                    Dashboard</a></li>
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin/clientes"><i class="fas fa-users"></i>
                    Clientes</a></li>
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin/productos"><i class="fas fa-store"></i>
                    Productos</a></li>
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin/pedidos"><i class="fas fa-truck"></i>
                    Pedidos</a></li>
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin/estadisticas"><i
                        class="fas fa-chart-line"></i> Estadisticas</a></li>
            <li class="py-1 md:py-3"><a class="font-sairaSemiBold" href="/admin/perfil"><i
                        class="fas fa-user-circle"></i> Perfil</a></li>
        </ul>
    </aside>
    <header id="admin-header"
        class="flex justify-between px-2 md:px-8 items-center col-span-3 md:col-span-5 bg-red-300 h-16 text-lg shadow-inner row-span-1 text-gray-700">
        <div class="flex items-center w-full justify-between md:justify-end">
            <div class="block md:hidden mr-5" id="btn-admin-menu-open"><i class="fas fa-bars"></i></div>
            <div class="flex items-center">
                <img src="{{ Auth::user()->avatar }}" alt="foto-perfil" width="40px" height="40px"
                    class="rounded-full">
                <p class="font-sairaBold px-5 text-sm md:text-xl">{{ Auth::user()->name }}</p>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="font-sairaBold text-md hidden md:block"><i class="fas fa-power-off"></i>
                    Cerrar sesión</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="font-sairaBold text-md block md:hidden"><i class="fas fa-power-off"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </header>
