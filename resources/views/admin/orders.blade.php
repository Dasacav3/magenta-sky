@includeIf('admin.head', ['title' => 'Pedidos'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Pedidos</h2>
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

                    <h4 class="text-2xl font-bold pb-5">Añadir pedidos</h4>

                    <form method="POST" class="flex justify-center flex-col">
                        <legend class="text-left">Facturación</legend>
                        <fieldset>
                            <label>Fecha de creación</label>
                            <input type="date" class="border border-black">
                            <label>Estado</label>
                            <select name="estado" id="estado" class="border border-black">
                                <option value="pendiente_pago">Pendiente de pago</option>
                                <option value="procesando">Procesando</option>
                                <option value="en_espera">En espera</option>
                                <option value="completado">Completado</option>
                                <option value="cancelado">Cancelado</option>
                                <option value="reembolso">Reembolsado</option>
                                <option value="fallido">Fallido</option>
                            </select>
                            <label>Cliente</label>
                            <select name="cliente" id="cliente" class="border border-black">
                                <option value="invitado">Invitado</option>

                                @foreach ($cliente as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                            <label>Dirección facturación</label>
                            <input type="text" class="border border-black">
                            <label>Correo electronico</label>
                            <input type="email" class="border border-black">
                            <label>Dirección de envio</label>
                            <input type="text" class="border border-black">
                        </fieldset>
                        <legend class="text-left">Producto</legend>
                        <fieldset>
                            <label>Producto</label>
                            <select name="producto" id="producto" class="border border-black">
                                @foreach ($productos as $item)
                                    <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            <label>Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="border border-black">
                            <button
                                class="text-white bg-red-400 rounded-xl px-2 py-1 text-shadow mb-4 transition-colors duration-150 ease-linear">Añadir
                                producto</button>
                            <table>
                                <tfoot>
                                    <th>Articulo</th>
                                    <th>Coste</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                            <button
                                class="text-white bg-red-400 rounded-xl px-2 py-1 text-shadow mb-4 transition-colors duration-150 ease-linear">Guardar</button>
                        </fieldset>
                        <label for="">Notas del pedido</label>
                        <textarea name="" id="" cols="20" rows="10" placeholder="Añade una nota"
                            class="border border-black"></textarea>
                    </form>

                    <!-- Buttons -->
                    <div class="text-right space-x-5 mt-5 flex justify-center items-center">
                        <button @click="showModal = !showModal"
                            class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancelar</button>
                        <button
                            class="text-white bg-gray-700 rounded-xl px-4 py-2 text-shadow mb-4 transition-colors duration-150 ease-linear">Crear
                            pedido</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div x-data="{ showModal : false }">
        <!-- Button -->
        <button @click="showModal = !showModal"
            class="text-white bg-gray-700 rounded-lg px-3 py-1 text-shadow mb-4 transition-colors duration-150 ease-linear"><i
                class="fas fa-credit-card"></i>
            Metodos de pago</button>

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

                <h4 class="text-2xl font-bold pb-5">Metodos de pago</h4>

                @foreach ($metodos as $item)
                    <div class="flex">
                        <p class="capitalize font-bold mr-2">{{ $item->nombre }}</p>
                        <p>{{ $item->descripcionMetodo }}</p>
                    </div>
                @endforeach

                <!-- Buttons -->
                <div class="text-right space-x-5 mt-5 flex justify-center items-center">
                    <button @click="showModal = !showModal"
                        class="px-4 py-2 text-sm bg-white rounded-xl bg-gray-700 border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <table id="example">
        <thead class="bg-gray-700 text-white">
            <th>ID</th>
            <th>FECHA</th>
            <th>DIRECCION ENVIO</th>
            <th>METODO PAGO</th>
            <th>ESTADO</th>
            <th>EDICIÓN</th>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->fechaCreacion }}</td>
                    <td>{{ $pedido->direccionEnvio }}</td>
                    <td>{{ $pedido->idMetodo_pago }}</td>
                    <td>{{ $pedido->estadoPedido }}</td>
                    <td><button><i class="fas fa-edit"></i></button></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-gray-700 text-white">
            <th>ID</th>
            <th>FECHA</th>
            <th>DIRECCION ENVIO</th>
            <th>METODO PAGO</th>
            <th>ESTADO</th>
            <th>EDICIÓN</th>
        </tfoot>
    </table>
</div>

</div>

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

<script src="/js/orders.js"></script>

@includeIf('admin.footer')
