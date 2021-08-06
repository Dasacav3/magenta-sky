<div class="grid grid-cols-6">
    <aside class="flex flex-col w-full bg-red-300 items-center h-screen col-span-1">
        <h1 class="font-sairaBold text-3xl uppercase flex items-center text-white text-shadow my-5"><img
                src="/img/favicon.png" alt="Magenta Sky" width="100px" class="mr-4 shadow-xl rounded-full"> Magenta Sky
        </h1>
        <ul class="self-start ml-10 text-lg leading-loose">
            <li>Dashboard</li>
            <li>Clientes</li>
            <li>Productos</li>
            <li>Pedidos</li>
            <li>Ventas</li>
            <li>Marketing</li>
        </ul>
    </aside>
    <header class="flex justify-between px-8 items-center col-span-5 bg-red-200 h-16 text-lg">
        <h2 class="font-sairaBold">Dashboard</h2>
        <div class="flex items-center">
            <img src="{{ Auth::user()->avatar }}" alt="foto-perfil" width="40px" height="40px" class="rounded-full">
            <p class="font-sairaBold px-5">{{ Auth::user()->name }}</p>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                class="font-sairaBold"><i class="fas fa-power-off"></i>
                Cerrar sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>
</div>
