@includeIf('includes.head', ['title' => 'Contacto | Magenta Sky'])

@includeIf('includes.navbar', ['active_link' => 'lista-deseos'])

<div class="container m-auto">
    <div class="text-center font-bold text-4xl m-5">
        <h2>Contactanos</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 m-5">
        <div class="m-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.39281042662!2d-74.24789172387798!3d4.648625932882653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1625847666850!5m2!1ses-419!2sco"
                style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-full rounded-xl"></iframe>
        </div>
        <form action="#" method="POST"
            class="flex flex-col p-4 rounded-xl w-80 text-black m-auto shadow-2xl border-2 border-solid border-red-300">
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
                <textarea name="" id="" cols="30" rows="10"
                    class="w-full resize-none rounded-md border-2 border-solid border-red-300"></textarea>
            </div>
            <div class="m-auto">
                <input type="submit" value="Enviar" class="px-2 py-1 bg-red-300 shadow-xl">
            </div>
        </form>
    </div>
</div>

@includeIf('includes.footer')
