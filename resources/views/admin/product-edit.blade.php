@includeIf('admin.head', ['title' => 'Editar producto #'.$producto->id])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Producto #{{ $item->id }}</h2>
    </div>
    <div>
        <form action="{{ route('productos.edit') }}">
            <p>{{ $producto->nombre }}</p>
            <p><img src="/img/products_img/{{ $producto->imagen }}" alt="{{ $producto->nombre }}" width="300"></p>
            <p>SKU: {{ $producto->sku }}</p>
            <p>Precio: ${{$producto->precio}}</p>
            <p>Cantidad: {{$producto->cantidad}}</p>
            <p>Stock: {{$producto->stock}}</p>
            <p>Descripción corta: {{$producto->descripcionCorta}}</p>
            <p>Descripción larga: {{$producto->descripcionLarga}}</p>
        </form>
    </div>
</div>

<script src="/js/products.js"></script>

@includeIf('admin.footer')
