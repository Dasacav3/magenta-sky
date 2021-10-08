@includeIf('admin.head', ['title' => 'Productos'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Productos</h2>
        <!-- Modal -->
        <div x-data="{ showModal : false }">
            <!-- Button -->
            <button @click="showModal = !showModal"
                class="text-white bg-gray-700 rounded-lg px-3 py-1 text-shadow mb-4 transition-colors duration-150 ease-linear"><i
                    class="fas fa-plus"></i>
                Añadir</button>

            <!-- Modal Background -->
            <div x-show="showModal"
                class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0 "
                x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <!-- Modal -->
                <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-6/12 mx-10 h-5/6 overflow-auto"
                    @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    x-transition:leave="transition ease duration-100 transform"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-90 translate-y-1">

                    <h4 class="text-2xl font-bold pb-5">Añadir producto</h4>

                    <form id="formProducto" method="POST" action="{{ route('productos.create') }}"
                        enctype="multipart/form-data" class="flex justify-center flex-col">
                        @csrf
                        <label>Nombre producto</label>
                        <input type="text" class="border border-black" name="nombreProducto">
                        <label>SKU</label>
                        <input type="text" class="border border-black" name="skuProducto">
                        <label>Precio</label>
                        <input type="number" class="border border-black" name="precioProducto">
                        <label>Stock</label>
                        <input type="number" class="border border-black" name="stockProducto">
                        <label>Cantidad</label>
                        <input type="text" class="border border-black" name="cantidadProducto">
                        <label>Descripción corta</label>
                        <textarea class="border border-black resize-none" rows="3" cols="10"
                            name="descripcionCorta"></textarea>
                        <label>Descripción larga</label>
                        <textarea class="border border-black resize-none" rows="10" cols="10"
                            name="descripcionLarga"></textarea>
                        <label>Categorias</label>
                        <div id="categorias" class="flex flex-col items-start">
                            @foreach ($categorias as $item)
                                <label class="pr-2 capitalize"><input type="checkbox" value="{{ $item->id }}"
                                        name="categorias[]">
                                    {{ $item->nombreCategoria }}</label>
                            @endforeach
                        </div>
                        <input id="iptNuevaCategoria" name="iptNuevaCategoria" type="text" class="border border-black"
                            placeholder="Escribe para añadir una categoria" name="nuevaCategoria">
                        <button id="btnNuevaCategoria" class="bg-red-400 text-white w-max px-3 self-center my-3">Nueva
                            categoria</button>
                        <label>Opciones producto</label>
                        <select name="opcionesProducto" id="opciones" class="border border-black">
                            <option value="">Seleccione una opción</option>
                            @foreach ($opciones as $item)
                                <option value="{{ $item->id }}">{{ $item->descripcion }} - {{ $item->nombre }}
                                </option>
                            @endforeach
                        </select>
                        <label>Imagen</label>
                        <input type="file" name="fotoProducto" class="border border-black" accept="image/*" required>
                        <!-- Buttons -->
                        <div class="text-right space-x-5 mt-5 flex justify-center items-center">
                            <button @click="showModal = !showModal"
                                class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancelar</button>
                            <input type="submit" value="Añadir" id="btnAddProduct"
                                class="text-white ml-1 bg-gray-700 rounded-xl px-4 py-2 text-shadow transition-colors duration-150 ease-linear" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table id="datatable">
        <thead class="bg-gray-700 text-white text-lg">
            <th>ID</th>
            <th>SKU</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>IMAGEN</th>
            <th>EDICIÓN</th>
        </thead>
        <tbody id="table_data" class="text-lg">
        </tbody>
        <tfoot class="bg-gray-700 text-white text-lg">
            <th>ID</th>
            <th>SKU</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>IMAGEN</th>
            <th>EDICIÓN</th>
        </tfoot>
    </table>
</div>

</div>

<script src="/js/products.js"></script>

@includeIf('admin.footer')
