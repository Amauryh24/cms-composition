const navslide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".res-menu");
    const navLinks = document.querySelectorAll(".res-menu li");

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        navLinks.forEach((link, index) =>{
            link.style.animation ? link.style.animation = "" : link.style.animation = `fading 0.5s ease forwards ${index / 7 + 1}s`
        });

        burger.classList.toggle("toggle");
    });
    
};
navslide();