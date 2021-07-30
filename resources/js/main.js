window.addEventListener("DOMContentLoaded", () => {
    let body = document.querySelector("body");
    let btnNavBar = document.getElementById("nav-bar-btn");
    let btn = document.getElementById("btnNavBar");
    let status = false;
    btnNavBar.addEventListener("click", () => {
        let navBar = document.getElementById("nav-bar-responsive");
        if (status) {
            btn.setAttribute("class", "fas fa-bars fa-2x");
            body.setAttribute("class", "overflow-auto");
            status = false;
        } else {
            btn.setAttribute("class", "fas fa-times fa-2x");
            body.setAttribute("class", "overflow-hidden");
            status = true;
        }
        navBar.classList.toggle("hidden");
    });
});
