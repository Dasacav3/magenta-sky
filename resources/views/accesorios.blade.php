@includeIf('includes.head', ['title' => 'Accesorios | Magenta Sky'])

@includeIf('includes.navbar', ['active_link' => 'accesorios'])
<main>
    <div class="container m-auto">
        <div class="m-auto h-96 bg-gray-300 mt-8 flex flex-col justify-around pl-8">
            <h1 class="uppercase font-sairaBold text-4xl">Accesorios</h1>
            <p class="text-xl">Ven completa tu nuevo look con los mejores <br> accesorios que Magenta Sky tiene para tí.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 justify-items-center py-10 gap-y-8">

            <div class="card">
                <div>
                    <img class="card-img" src="assets/49.jpg" alt="" loading="lazy">
                    <div>
                        <br>
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
                    <img class="card-img" src="assets/50.jpg" alt="" loading="lazy">
                    <div>
                        <br>
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
                    <img class="card-img" src="assets/51.jpg" alt="" loading="lazy">
                    <div>
                        <br>
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
                    <img class="card-img" src="assets/52.jpg" alt="" loading="lazy">
                    <div>
                        <br>
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
                    <img class="card-img" src="assets/53.jpg" alt="" loading="lazy">
                    <div>
                        <br>
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
    </div>
</main>

@includeIf('includes.footer')
