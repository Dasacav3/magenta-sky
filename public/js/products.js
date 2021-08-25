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
                        "<button><a href='/admin/productos/"+data+"'><i class='fas fa-edit'></i></a></button>"
                    );
                },
            },
        ],
    });
});
