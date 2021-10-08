window.addEventListener("DOMContentLoaded", () => {
    const table_data = document.getElementById("table_data");
    $("#datatable").DataTable({
        responsive: true,
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
        },
        ajax: {
            url: "/admin/productos/get",
            type: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
            },
            dataSrc: "",
        },

        columns: [
            {
                data: "id",
            },
            {
                data: "sku",
            },
            {
                data: "nombre",
            },
            {
                data: "precio",
            },
            {
                data: "cantidad",
            },
            {
                data: "imagen",
            },
            {
                data: "id",
            },
        ],
        deferRender: true,
        columnDefs: [
            {
                targets: -2,
                data: "img",
                render: function (data, type, row, meta) {
                    return (
                        '<div class="w-full flex justify-center"><img width="100px" src="/img/products_img/' +
                        data +
                        '"/></div>'
                    );
                },
            },
            {
                targets: -1,
                data: null,
                render: function (data, type, row, meta) {
                    return (
                        "<button><a href='/admin/productos/" +
                        data +
                        "'><i class='fas fa-edit'></i></a></button>"
                    );
                },
            },
        ],
    });

    let btnAddNewCategory = document.getElementById("btnNuevaCategoria");
    let formProducto = document.getElementById("formProducto");
    if (btnAddNewCategory) {
        btnAddNewCategory.addEventListener("click", (e) => {
            e.preventDefault();
            let _token = document.getElementsByName("_token")[0].value;

            fetch("/admin/productos/categoria/add", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": _token,
                },
                credentials: "same-origin",
                body: JSON.stringify(formProducto.iptNuevaCategoria.value),
            })
                .then((req) => req.text())
                .then((res) => {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener(
                                "mouseenter",
                                Swal.stopTimer
                            );
                            toast.addEventListener(
                                "mouseleave",
                                Swal.resumeTimer
                            );
                        },
                    });

                    Toast.fire({
                        icon: "success",
                        title: "Categoria añadida",
                    });

                    location.reload();
                });
        });
    }
});
