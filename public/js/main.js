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
    let btnAdminMenuOpen = document.getElementById("btn-admin-menu-open");
    let btnAdminMenuClose = document.getElementById("btn-admin-menu-close");
    let adminHeader = document.getElementById("admin-header");
    let adminAside = document.getElementById("admin-menu");
    if (btnAdminMenuOpen) {
        btnAdminMenuOpen.addEventListener("click", () => {
            let adMenu = document.getElementById("admin-menu");
            adMenu.classList.toggle("hidden");
            btnAdminMenuClose.classList.toggle("hidden");
            adminHeader.classList.toggle("hidden");
            adminAside.classList.toggle("overflow-hidden");
        });
    }
    if (btnAdminMenuClose) {
        btnAdminMenuClose.addEventListener("click", () => {
            let adMenu = document.getElementById("admin-menu");
            adMenu.classList.toggle("hidden");
            btnAdminMenuClose.classList.toggle("hidden");
            adminHeader.classList.toggle("hidden");
            adminAside.classList.toggle("overflow-hidden");
        });
    }
});
