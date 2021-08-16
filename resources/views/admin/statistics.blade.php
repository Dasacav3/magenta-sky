@includeIf('admin.head', ['title' => 'Estadisticas'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">

    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Estadisticas</h2>
    </div>

    <div>
        <div class="bg-red-400 rounded-xl text-xl py-5 mb-5 text-white">
            <a href="/admin/estadisticas/">
                <h4 class="text-2xl font-bold text-shadow">Productos</h4>
                <i class="fas fa-shopping-cart text-shadow"></i>
                <p class="text-shadow">48</p>
            </a>
        </div>
        <div class="bg-gray-400 rounded-xl text-xl py-5 mb-5 text-white">
            <a href="/admin/estadisticas/">
                <h4 class="text-2xl font-bold text-shadow">Pedidos</h4>
                <i class="fas fa-shopping-cart text-shadow"></i>
                <p class="text-shadow">48</p>
            </a>
        </div>
        <div class="bg-blue-400 rounded-xl text-xl py-5 mb-5 text-white">
            <a href="/admin/estadisticas/">
                <h4 class="text-2xl font-bold text-shadow">Inventario</h4>
                <i class="fas fa-shopping-cart text-shadow"></i>
                <p class="text-shadow">48</p>
            </a>
        </div>
        <div class="bg-purple-400 rounded-xl text-xl py-5 mb-5 text-white">
            <a href="/admin/estadisticas/">
                <h4 class="text-2xl font-bold text-shadow">Productos</h4>
                <i class="fas fa-shopping-cart text-shadow"></i>
                <p class="text-shadow">48</p>
            </a>
        </div>
        <div class="bg-yellow-400 rounded-xl text-xl py-5 mb-5 text-white">
            <a href="/admin/estadisticas/">
                <h4 class="text-2xl font-bold text-shadow">Ingresos</h4>
                <i class="fas fa-shopping-cart text-shadow"></i>
                <p class="text-shadow">48</p>
            </a>
        </div>
    </div>

</div>

</div>

@includeIf('admin.footer')
