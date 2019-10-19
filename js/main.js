const navslide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".header-menu-inner");
    const navLinks = document.querySelectorAll(".header-menu-inner li");

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
    });
    navLinks.forEach((link, index) =>{
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 2}s`
        
    });
};
navslide();