//etat du menu mobile
let mobileMenuOpen = false;

//à la fin du chargement de la page
document.addEventListener("DOMContentLoaded", () => {

/* gestion du menu mobile */
    const menu = document.getElementById('menu');
    const menuBurger = document.getElementById('mobile-menu');

    const btnBurger = document.getElementById('mobile-menu');
    if (btnBurger) {
        btnBurger.onclick = () => {
            menu.classList.toggle('active');
            menuBurger.classList.toggle('active');
            mobileMenuOpen = !mobileMenuOpen;
        }
    }

    const nav = document.getElementById('menu');
    if (nav) {
        nav.onclick = () => {
            if (mobileMenuOpen) {
                menu.classList.remove('active');
                menuBurger.classList.remove('active');
                mobileMenuOpen = false;
            }
        }
    }

});
