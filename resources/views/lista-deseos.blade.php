@includeIf('includes.head', ['title' => 'Lista de deseos | Magenta Sky'])

@includeIf('includes.navbar', ['active_link' => 'lista-deseos'])

<main>
    <div class="container m-auto px-1 lg:px-8 py-12 grid grid-cols-1 lg:w-9/12">
        <div>
            <h1 class="uppercase font-sairaExtraBold text-3xl lg:text-4xl text-center lg:text-left">Lista de deseos</h1>
            <div class="card-car-shop my-8 shadow-lg grid-cols-2 lg:grid-cols-3">
                <div class="bg-gray-200 flex justify-center"><img src="assets/31.png" alt=""></div>
                <div class="lg:col-span-2 p-2 lg:p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between">
                            <h3 class="font-bold text-md lg:text-2xl">CHAQUETA ROMPEVIENTOS PURPURA</h3>
                            <i class="fas fa-times text-2xl self-center"></i>
                        </div>
                        <p>$65.000</p>
                    </div>
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <select name="" id="" class="border-btn w-16 bg-transparent h-8 mb-4">
                            <option value="1">1</option>
                        </select>
                        <button
                            class="uppercase font-sairaSemiBold text-md lg:text-lg bg-gray-700 p-2 lg:p-3 text-white w-max">Añadir
                            al carrito <i class="fas fa-shopping-bag"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-car-shop shadow-lg grid-cols-2 lg:grid-cols-3">
                <div class="bg-gray-200 flex justify-center"><img src="assets/13.png" alt=""></div>
                <div class="lg:col-span-2 p-2 lg:p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between">
                            <h3 class="font-bold text-md lg:text-2xl">CHAQUETA ROMPEVIENTOS ROSA</h3>
                            <i class="fas fa-times text-2xl self-center"></i>
                        </div>
                        <p>$65.000</p>
                    </div>
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <select name="" id="" class="border-btn w-16 bg-transparent h-8 mb-4">
                            <option value="1">1</option>
                        </select>
                        <button
                            class="uppercase font-sairaSemiBold text-md lg:text-lg bg-gray-700 p-2 lg:p-3 text-white w-max">Añadir
                            al carrito <i class="fas fa-shopping-bag"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="block pt-12 lg:hidden">
            <hr class="border-t-4 border-black border-dashed">
        </div>
    </div>
</main>

@includeIf('includes.footer')
