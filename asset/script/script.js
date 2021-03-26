"use strict";

if(document.querySelector('.nav-bg') !== null){
    const nav = document.querySelector('.nav-bg');
    const scrollPos = window.scrollY;
    if(scrollPos > nav.offsetHeight){
        nav.classList.add("bg-light")
        nav.classList.add("navbar-light")
        nav.classList.remove("navbar-dark")

    } else {
        nav.classList.remove("bg-light")
        nav.classList.remove("navbar-light")
        nav.classList.add("navbar-dark")

    }
}
document.querySelector('.scroll-btn') !== null && (
    document.querySelector('.scroll-btn').addEventListener('click', (e) => {
        const selection = document.querySelector('.selection')
        selection.scrollIntoView({behavior : "smooth"});

    })
)


document.querySelector(".form-search-input").addEventListener("focusin", (elem) => {
    elem.target.style.width = "150px"
})
document.querySelector(".form-search-input").addEventListener("focusout", (elem) => {
    elem.target.style.width = "25px"
})

document.querySelector('.plus') !== null && (
    document.querySelector('.plus').addEventListener('click',(e) => {
        const input = e.target.nextElementSibling;
        parseInt(input.value) >= parseInt(input.max) ? input.value = input.max : input.value = parseInt(input.value)+  parseInt(1);
    })
)
document.querySelector('.minus') !==null && (
    document.querySelector('.minus').addEventListener('click',(e) => {
        const input = e.target.previousElementSibling;
        input.value <= 0 ? input.value = 0 : input.value -=1;
    })
)
