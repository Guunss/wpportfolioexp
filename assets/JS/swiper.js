/* config de l'instance Swiper */
const swiperConf = {
    //on boucle
    loop: true,
    //hauteur automatique
    autoHeight: true,
    //espace entre chaque slide
    spaceBetween: 30,
    //les boutons de navigation
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
};
 //à la fin du chargement de la page : on crée un nouvel objet Swiper
document.addEventListener("DOMContentLoaded", () => {

    var persoSlides = new Swiper('.swiper', swiperConf);
});