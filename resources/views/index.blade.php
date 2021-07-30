@includeIf('includes.head', ['title' => 'Magenta Sky - Relojería de lujo y accesorios 🌟
Envíos seguros a todo el país ✈️'])

@includeIf('includes.navbar', ['active_link' => 'home'])

<!-- Swiper Big -->
<div class="swiper-container SwiperIndex my-5 bg-red-400 hidden lg:block">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div
                class="container m-auto h-full grid grid-cols-1 lg:grid-cols-3 justify-items-center lg:justify-items-start">
                <div class="flex flex-col lg:pl-8 h-full justify-center p-8 items-center lg:items-start">
                    <h3 class="uppercase text-2xl font-extrabold">Conjuntos exclusivos</h3>
                    <p class="text-lg font-medium">Aprovecha y ven por el tuyo</p>
                    <button class="bg-white py-2 px-3 rounded-md w-40 mt-8 font-bold">VER MÁS <i
                            class="fas fa-arrow-right"></i></button>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 h-full items-center lg:col-span-2">
                    <img src="assets/21.png" class="rounded-lg object-cover object-top"
                        style="width: 250px; height:250px;" alt="">
                    <img src="assets/35.png" class="rounded-lg object-cover" style="width: 250px; height:250px;" alt="">
                    <img src="assets/36.png" class="rounded-lg object-cover" style="width: 250px; height:250px;" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<!-- Swiper Responsive-->
<div class="swiper-container SwiperIndexRes my-5 bg-red-400 block lg:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="flex flex-col lg:pl-8 h-full justify-center items-center lg:items-start">
                <h3 class="uppercase text-2xl font-extrabold">Conjuntos exclusivos</h3>
                <p class="text-lg font-medium">Aprovecha y ven por el tuyo</p>
                <button class="bg-white py-2 px-3 rounded-md w-40 mt-8 font-bold">VER MÁS <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="swiper-slide flex justify-center items-center">
            <img src="assets/21.png" class="rounded-lg object-cover h-full" alt="">
        </div>
        <div class="swiper-slide flex justify-center items-center">
            <img src="assets/35.png" class="rounded-lg object-cover h-full" alt="">
        </div>
        <div class="swiper-slide flex justify-center items-center">
            <img src="assets/36.png" class="rounded-lg object-cover h-full" alt="">
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="bg-pink-300">
    <div class="container m-auto flex items-center flex-col py-10 px-5">
        <h3 class="uppercase font-extrabold text-3xl w-full text-center mb-5">Temporada de descuentos</h3>
        <p class="text-lg font-medium">Aprovecha hasta el 40 % de descuento en accesorios para dama y/o caballero</p>
        <button class="bg-white py-2 px-3 rounded-md w-40 mt-8 font-bold">COMPRAR AHORA <i
                class="fas fa-arrow-right"></i></button>
    </div>
</div>

<main>
    <div class="container m-auto">
        <h3 class="uppercase font-extrabold text-3xl pt-5 text-center">Productos nuevos</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 justify-items-center py-10 gap-y-8">

            <div class="card">
                <div>
                    <img class="card-img" src="assets/1.png" alt="" loading="lazy">
                    <div class="card-state">
                        ¡Nuevo!
                    </div>
                    <div class="card-price">
                        $65.000
                    </div>
                </div>
                <div class="card-content p-2">
                    <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quis
                        voluptatibus praesentium vitae natus dicta.</p>
                </div>
            </div>

            <div class="card">
                <div>
                    <img class="card-img" src="assets/32.png" alt="" loading="lazy">
                    <div class="card-state">
                        ¡Nuevo!
                    </div>
                    <div class="card-price">
                        $65.000
                    </div>
                </div>
                <div class="card-content p-2">
                    <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quis
                        voluptatibus praesentium vitae natus dicta.</p>
                </div>
            </div>

            <div class="card">
                <div>
                    <img class="card-img" src="assets/3.png" alt="" loading="lazy">
                    <div class="card-state">
                        ¡Nuevo!
                    </div>
                    <div class="card-price">
                        $65.000
                    </div>
                </div>
                <div class="card-content p-2">
                    <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quis
                        voluptatibus praesentium vitae natus dicta.</p>
                </div>
            </div>

            <div class="card">
                <div>
                    <img class="card-img" src="assets/4.png" alt="" loading="lazy">
                    <div class="card-state">
                        ¡Nuevo!
                    </div>
                    <div class="card-price">
                        $65.000
                    </div>
                </div>
                <div class="card-content p-2">
                    <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quis
                        voluptatibus praesentium vitae natus dicta.</p>
                </div>
            </div>

            <div class="card">
                <div>
                    <img class="card-img" src="assets/6.png" alt="" loading="lazy">
                    <div class="card-state">
                        ¡Nuevo!
                    </div>
                    <div class="card-price">
                        $65.000
                    </div>
                </div>
                <div class="card-content p-2">
                    <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                    <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quis
                        voluptatibus praesentium vitae natus dicta.</p>
                </div>
            </div>

        </div>
        <div class="container m-auto">
            <h3 class="uppercase font-extrabold text-3xl text-center">Productos mas comprados</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 justify-items-center py-10 gap-y-8">

                <div class="card">
                    <div>
                        <img class="card-img" src="assets/7.png" alt="" loading="lazy">
                        <div>
                            <br>
                        </div>
                        <div class="card-price">
                            $65.000
                        </div>
                    </div>
                    <div class="card-content p-2">
                        <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex
                            quis voluptatibus praesentium vitae natus dicta.</p>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img class="card-img" src="assets/28.png" alt="" loading="lazy">
                        <div>
                            <br>
                        </div>
                        <div class="card-price">
                            $65.000
                        </div>
                    </div>
                    <div class="card-content p-2">
                        <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex
                            quis voluptatibus praesentium vitae natus dicta.</p>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img class="card-img" src="assets/31.png" alt="" loading="lazy">
                        <div>
                            <br>
                        </div>
                        <div class="card-price">
                            $65.000
                        </div>
                    </div>
                    <div class="card-content p-2">
                        <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex
                            quis voluptatibus praesentium vitae natus dicta.</p>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img class="card-img" src="assets/10.png" alt="" loading="lazy">
                        <div>
                            <br>
                        </div>
                        <div class="card-price">
                            $65.000
                        </div>
                    </div>
                    <div class="card-content p-2">
                        <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex
                            quis voluptatibus praesentium vitae natus dicta.</p>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img class="card-img" src="assets/20.png" alt="" loading="lazy">
                        <div>
                            <br>
                        </div>
                        <div class="card-price">
                            $65.000
                        </div>
                    </div>
                    <div class="card-content p-2">
                        <h4 class="card-title font-bold text-xl">Lorem ipsum dolor sit amet</h4>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex
                            quis voluptatibus praesentium vitae natus dicta.</p>
                    </div>
                </div>

            </div>

        </div>
</main>

<script src="js/carrousel.js"></script>

@includeIf('includes.footer')
