@includeIf('admin.head', ['title' => 'Editar producto #'.$producto->id.' '.$producto->sku])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Producto #{{ $producto->id }}</h2>
    </div>
    <div class="flex justify-center">
        <form action="{{ route('productos.edit', $producto) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input name="id_product" type="hidden" value="{{ $producto->id }}">
            <div class="flex justify-center border-dashed border-2 border-black p-3 mb-3">
                <img src="/img/products_img/{{ $producto->imagen }}" alt="{{ $producto->nombre }}" width="250">
            </div>
            <div class="flex justify-center">
                <input class="w-48" type="file" name="photo_product">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 my-5 text-left">
                <label for="">Nombre producto: </label>
                <input name="name_product" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->nombre }}">
                <label for="">SKU: </label>
                <input name="sku_product" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->sku }}">
                <label for="">Precio: </label>
                <input name="price_product" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->precio }}">
                <label for="">Cantidad: </label>
                <input name="cant_product" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->cantidad }}">
                <label for="">Stock: </label>
                <input name="stock_product" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->stock }}">
                <label for="">Estado stock: </label>
                <select name="opcionesProducto" id="opciones" class="border border-black w-64 md:col-span-2">
                    <option value="{{ $producto->estado_stock }}">{{ $producto->estado_stock }} (Actual)</option>
                    <option value="Agotado">Agotado</option>
                    <option value="Pedido realizado">Pedido realizado</option>
                    <option value="Disponible">Disponible</option>
                </select>
                <label for="">Categorias</label>
                <div class="md:col-span-2 w-64">
                    @foreach ($categorias as $item)
                        <label class="pr-2 capitalize"><input type="checkbox" value="{{ $item->id }}"
                                name="categorias[]">
                            {{ $item->nombreCategoria }}</label><br>
                    @endforeach
                </div>
                <label>Opciones producto</label>
                <select name="opcionesProducto" id="opciones" class="border border-black w-64 md:col-span-2">
                    <option value="">Seleccione una opción</option>
                    @foreach ($opciones as $item)
                        <option value="{{ $item->id }}">{{ $item->descripcion }} - {{ $item->nombre }}
                        </option>
                    @endforeach
                </select>
                <label for="">Descripción corta: </label>
                <input name="short_des" class="border border-black w-64 md:col-span-2" type="text"
                    value="{{ $producto->descripcionCorta }}">
                <label for="">Descripción larga: </label>
                <textarea name="long_des"
                    class="border border-black w-64 h-24 resize-none md:col-span-2">{{ $producto->descripcionLarga }}</textarea>
            </div>
            <div>
                <input class="bg-red-300 px-3 py-1 font-bold" type="submit" value="Actualizar">
            </div>
        </form>
    </div>
</div>

<script src="/js/products.js"></script>

@includeIf('admin.footer')
