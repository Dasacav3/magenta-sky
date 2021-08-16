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
                <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10 h-5/6 overflow-auto"
                    @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    x-transition:leave="transition ease duration-100 transform"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-90 translate-y-1">

                    <h4 class="text-2xl font-bold pb-5">Añadir producto</h4>

                    <form method="POST" class="flex justify-center flex-col">
                        <label>Nombre producto</label>
                        <input type="text" class="border border-black">
                        <label>Producto SKU</label>
                        <input type="text" class="border border-black">
                        <label>Precio</label>
                        <input type="number" class="border border-black">
                        <label>Stock</label>
                        <input type="number" class="border border-black">
                        <label>Producto SKU</label>
                        <input type="text" class="border border-black">
                        <label>Descripción corta</label>
                        <textarea class="border border-black resize-none" rows="3" cols="25"></textarea>
                        <label>Descripción tarjeta</label>
                        <textarea class="border border-black resize-none" rows="3" cols="25"></textarea>
                        <label>Descripción larga</label>
                        <textarea class="border border-black resize-none" rows="10" cols="25"></textarea>
                        <label>Categorias</label>
                        <input type="text" class="border border-black" placeholder="Escribe para añadir una categoria">
                        <button class="bg-red-400 text-white w-max px-3 self-center my-3">Añadir categoria</button>
                        <textarea class="border border-black resize-none" rows="10" cols="25" readonly></textarea>
                        <label>Imagen</label>
                        <input type="file" class="border border-black">
                    </form>

                    <!-- Buttons -->
                    <div class="text-right space-x-5 mt-5 flex justify-center items-center">
                        <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancelar</button>
                        <button class="text-white bg-gray-700 rounded-xl px-4 py-2 text-shadow mb-4 transition-colors duration-150 ease-linear">Añadir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table id="example">
        <thead class="bg-gray-700 text-white">
            <th>ID</th>
            <th>SKU</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>IMAGEN</th>
            <th>EDICIÓN</th>
        </thead>
        <tbody>
            <tr>
                <td>F</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot class="bg-gray-700 text-white">
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

<!--

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "responsive": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
            }
        });
    });
</script>

-->

<script src="/js/products.js"></script>

@includeIf('admin.footer')
