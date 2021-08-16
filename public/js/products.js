window.addEventListener("DOMContentLoaded", () => {
    // Modal add products
    let containerFormAdd = document.getElementById("modalAdd");
	let formAdd = document.getElementById("addProductForm");

    let btnFormAddOpen = document.getElementById("btnModalOpenAdd");
    btnFormAddOpen.addEventListener("click", openModalAdd, false);

    let btnFormAddClose = document.getElementById("btnModalCloseAdd");
    btnFormAddClose.addEventListener("click", closeModalAdd, false);

    function openModalAdd() {
        containerFormAdd.classList.add("show");
        formAdd.classList.add("show");
    }

    function closeModalAdd() {
        containerFormAdd.classList.remove("show");
        formAdd.classList.remove("show");
    }
});
