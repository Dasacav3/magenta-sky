@includeIf('includes.head', ['title' => 'Magenta Sky - Relojería de lujo y accesorios 🌟
Envíos seguros a todo el país ✈️'])

<div class="m-auto">
    <h1 class="text-center my-5 text-2xl font-bold">Registro</h1>
    <form action="#" method="POST" class="flex flex-col p-4 rounded-xl w-80 text-black m-auto shadow-2xl border-2 border-solid border-red-300">
        <div>
            <label for="">Nombre</label>
            <input type="text" class="w-full rounded-md border-2 border-solid border-red-300">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" class="w-full rounded-md border-2 border-solid border-red-300">
        </div>
        <div>
            <label for="">Asunto</label>
            <input type="text" class="w-full rounded-md border-2 border-solid border-red-300">
        </div>
        <div>
            <label for="">Mensaje</label>
            <textarea name="" id="" cols="30" rows="10" class="w-full resize-none rounded-md border-2 border-solid border-red-300"></textarea>
        </div>
        <div class="m-auto">
            <input type="submit" value="Enviar" class="px-2 py-1 bg-red-300 shadow-xl">
        </div>
    </form>
    <div class="m-auto text-center mt-5">
        <a href="/login" class="px-2 py-1 shadow-xl rounded">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</div>

@includeIf('includes.footer')
