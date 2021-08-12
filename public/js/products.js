window.addEventListener("DOMContentLoaded", () => {
    let btnModalAdd = document.getElementById("btnModalAdd");
    btnModalAdd.addEventListener('click', openModal, false);
    function openModal(){
        Swal.fire({
            title: "<strong>Añadir Producto</strong>",
            html:
                `
                <div class="flex justify-center flex-col">
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
                    <button class="bg-purple-400 text-white w-max px-3 self-center my-3">Añadir categoria</button>
                    <textarea class="border border-black resize-none" rows="10" cols="25" readonly></textarea>
                    <label>Imagen</label>
                    <input type="file" class="border border-black">
                </div>
                `,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: 'Añadir',
            confirmButtonAriaLabel: "Thumbs up, great!",
            cancelButtonText: 'Cancelar',
            cancelButtonAriaLabel: "Thumbs down",
        });
    }
});
