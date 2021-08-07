window.addEventListener("DOMContentLoaded", () => {
    // Menu home page
    let body = document.querySelector("body");
    let btnNavBar = document.getElementById("nav-bar-btn");
    let btn = document.getElementById("btnNavBar");
    let statusNavbar = false;
    if (btnNavBar) {
        btnNavBar.addEventListener("click", () => {
            let navBar = document.getElementById("nav-bar-responsive");
            if (statusNavbar) {
                btn.setAttribute("class", "fas fa-bars fa-2x");
                body.setAttribute("class", "overflow-auto");
                statusNavbar = false;
            } else {
                btn.setAttribute("class", "fas fa-times fa-2x");
                body.setAttribute("class", "overflow-hidden");
                statusNavbar = true;
            }
            navBar.classList.toggle("hidden");
        });
    }
    // Menu admin panel
    let btnAdminMenu = document.getElementById("btn-admin-menu");
    let statusAdminMenu = false;
    if (btnAdminMenu) {
        btnAdminMenu.addEventListener("click", () => {
            let adMenu = document.getElementById("admin-menu");
            if (statusAdminMenu) {
                btnAdminMenu.setAttribute("class", "fas fa-bars fa-2x");
                body.setAttribute("class", "overflow-auto");
                statusAdminMenu = false;
            } else {
                btnAdminMenu.setAttribute("class", "fas fa-times fa-2x");
                body.setAttribute("class", "overflow-hidden");
                statusAdminMenu = true;
            }
            adMenu.classList.toggle("hidden");
        });
    }
});
