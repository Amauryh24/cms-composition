const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".res-menu");
    const navLinks = document.querySelectorAll(".res-menu li");
    //click sur le burger pour faire apparaitre le menu
    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 0.5}s`
        });
        burger.classList.toggle("toggle");
    });
    //click sur n'importe ou en zone noire dans le menu deployé pour le faire disparaitre
    nav.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 0.5}s`
        });
        burger.classList.toggle("toggle");
    });
};
navSlide();
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {
        duration: 500,
        indicators: true,
        fullWidth: true
    });
});
