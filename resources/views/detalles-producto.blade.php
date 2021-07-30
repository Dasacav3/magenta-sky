@includeIf('includes.head', ['title' => 'Detalles producto | Magenta Sky'])

@includeIf('includes.navbar', ['active_link' => 'coleccion'])
    <main>
        <div class="container m-auto w-full grid grid-cols-1 lg:grid-cols-3">
            <div class="lg:col-span-2 flex flex-col items-center mb-8">
                <div class="swiper-container SwiperDetails my-5 img-gallery h-auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center">
                            <img class="w-max h-full object-contain" src="assets/31.png" alt="">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img class="w-max h-full object-contain" src="assets/32.png" alt="">
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
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci corrupti dolor corporis quae quisquam repellendus. Culpa amet sed libero cum ducimus quos incidunt eum voluptatibus, architecto placeat deserunt, quis aut perspiciatis veniam repellendus inventore recusandae. Fuga dolorem temporibus magni facilis pariatur minima est iusto dolorum consectetur commodi quo blanditiis consequatur corporis aperiam, consequuntur dignissimos quod, aliquid enim, vero repellat. Fuga deleniti suscipit explicabo quos dicta doloremque nesciunt sit eius vero optio vel ducimus aspernatur ea debitis nihil amet laborum, earum repudiandae pariatur dolorem rerum ut nobis tempora voluptates? Aut necessitatibus alias rerum similique eaque cum accusamus voluptatum praesentium iusto ad.
                    </p>
                </div>
            </div>
            <div class="block lg:hidden">
                <hr class="border-t-4 border-black border-dashed">
            </div>
            <aside class="lg:col-span-1 p-5 lg:p-14">
                <h1 class="text-4xl font-black">CHAQUETA ROMPEVIENTOS PURPURA</h1>
                <p class="my-8 text-lg">$65.000</p>
                <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt inventore architecto est voluptate doloremque placeat eum cupiditate similique ratione veniam id hic, consequuntur, ullam neque tempora. Aperiam quisquam vitae voluptates.</p>
                <div class="my-8 flex justify-between">
                    <button class="uppercase font-bold bg-gray-700 text-white py-2 px-5 hover:bg-gray-500 cursor-pointer w-5/6">Añadir al carrito <i class="fas fa-arrow-right"></i></button>
                    <button class="bg-gray-700 text-white py-2 px-5 font-bold hover:bg-gray-500 cursor-pointer"><i class="fas fa-heart"></i></button>
                </div>
                <div>
                    <div class="mb-8 text-lg pl-10">
                        <i class="icon-info"><span class="iconify" data-icon="bi:shield-fill-check" data-inline="false" style="color: #0DD876;"></span></i>
                        <p class="uppercase font-bold">Paga Seguro</p>
                        <p>Puedes pagar con tarjeta o en efectivo</p>
                    </div>
                    <div class="text-lg pl-10">
                        <i class="icon-info"><span class="iconify" data-icon="akar-icons:shipping-box-01" data-inline="false" style="color: #DE5436;"></span></i>
                        <p class="uppercase font-bold">Envios a toda Colombia</p>
                        <p>Te llegara el producto sin importar donde vivas</p>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <script src="js/carrousel.js"></script>
    @includeIf('includes.footer')
