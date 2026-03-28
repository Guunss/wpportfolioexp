let mobileMenuOpen = false;


document.addEventListener("DOMContentLoaded", () => {

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
