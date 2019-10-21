const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".res-menu");
    const navLinks = document.querySelectorAll(".res-menu li");
    const overlay = document.querySelector("#overlay");
    //click sur le burger pour faire apparaitre le menu
    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 0.5}s`
        });
        burger.classList.toggle("toggle");
        overlay.classList.toggle("blacked");

    });
    //click sur n'importe ou en zone noire dans le menu deployé pour le faire disparaitre
    nav.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 0.5}s`
        });
        burger.classList.toggle("toggle");
        overlay.classList.toggle("blacked");
    });
    overlay.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 0.5}s`
        });
        burger.classList.toggle("toggle");
        overlay.classList.toggle("blacked");
    });
};
navSlide();