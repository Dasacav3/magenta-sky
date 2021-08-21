window.addEventListener("DOMContentLoaded", () => {
    const token = "Zuqi23uG8TYOSye1QGoWa6rsE6nl5EU2Qooog94x";
    const table_data = document.getElementById("table_data");
    fetch("/admin/productos/get", {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
        },
        method: "POST",
        credentials: "same-origin",
    })
        .then((req) => req.json())
        .then((res) => {
            console.log(res);

            let data = "";

            for (let i = 0; i < res.length; i++) {
                data += `
                    <tr>
                        <td> ${res[i].id} </td>
                        <td> ${res[i].sku} </td>
                        <td> ${res[i].nombre} </td>
                        <td> ${res[i].precio} </td>
                        <td> ${res[i].cantidad} </td>
                        <td class='flex justify-center'><img src="${res[i].imagen}" width='100px'></td>
                        <td><button><i class='fas fa-edit'></i></button></td>
                    </tr>
                `;
            }

            console.log(data);

            table_data.innerHTML = data;
        });

    let formProducto = document.getElementById("formProducto");
    let btnNuevaCategoria = document.getElementById("btnNuevaCategoria");
    if (btnNuevaCategoria) {
        btnNuevaCategoria.addEventListener("click", (e) => {
            e.preventDefault();
            fetch("/admin/productos/categoria/add", {
                method: "POST",
                body: new FormData(formProducto),
            })
                .then((req) => req.text())
                .then((res) => {
                    console.log(res);
                });
        });
    }
});
