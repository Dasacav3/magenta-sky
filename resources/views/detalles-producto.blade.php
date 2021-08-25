@includeIf('includes.head', ['title' => 'Detalle | ' . $producto->nombre])

@includeIf('includes.navbar', ['active_link' => 'coleccion'])
<main>
    <div class="container m-auto w-full grid grid-cols-1 lg:grid-cols-3">
        <div class="lg:col-span-2 flex flex-col items-center mb-8">
            <div class="swiper-container SwiperDetails my-5 img-gallery h-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center">
                        <img class="w-max h-full object-contain" src="/img/products_img/{{ $producto->imagen }}"
                            alt="">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img class="w-max h-full object-contain" src="/img/products_img/{{ $producto->imagen }}"
                            alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
            </div>

            <ul class="flex justify-around w-full mb-8 bg-gray-400 py-5 text-xl flex-col text-center lg:flex-row">
                <li class="uppercase font-bold"><a href="">Galeria</a></li>
                <li class="uppercase font-bold"><a href="">Descripción</a></li>
                <li class="uppercase font-bold"><a href="">Detalles</a></li>
                <li class="uppercase font-bold"><a href="">Información</a></li>
                <li class="uppercase font-bold"><a href="">Valoraciones</a></li>
            </ul>
            <div class="text-lg px-5">
                <p>
                    {{ $producto->descripcionLarga }}
                </p>
            </div>
        </div>
        <div class="block lg:hidden">
            <hr class="border-t-4 border-black border-dashed">
        </div>
        <aside class="lg:col-span-1 p-5 lg:p-14">
            <h1 class="text-4xl font-black uppercase">{{ $producto->nombre }}</h1>
            <p class="my-8 text-lg">${{ $producto->precio }}</p>
            <p class="text-lg">{{ $producto->descripcionCorta }}</p>
            <div class="my-8 flex justify-between">
                <button
                    class="uppercase font-bold bg-gray-700 text-white py-2 px-5 hover:bg-gray-500 cursor-pointer w-5/6">Añadir
                    al carrito <i class="fas fa-arrow-right"></i></button>
                <button class="bg-gray-700 text-white py-2 px-5 font-bold hover:bg-gray-500 cursor-pointer"><i
                        class="fas fa-heart"></i></button>
            </div>
            <div>
                <div class="mb-8 text-lg pl-10">
                    <i class="icon-info"><span class="iconify" data-icon="bi:shield-fill-check" data-inline="false"
                            style="color: #0DD876;"></span></i>
                    <p class="uppercase font-bold">Paga Seguro</p>
                    <p>Puedes pagar con tarjeta o en efectivo</p>
                </div>
                <div class="text-lg pl-10">
                    <i class="icon-info"><span class="iconify" data-icon="akar-icons:shipping-box-01"
                            data-inline="false" style="color: #DE5436;"></span></i>
                    <p class="uppercase font-bold">Envios a toda Colombia</p>
                    <p>Te llegara el producto sin importar donde vivas</p>
                </div>
            </div>
        </aside>
    </div>
</main>
<script src="/js/carrousel.js"></script>
@includeIf('includes.footer')
