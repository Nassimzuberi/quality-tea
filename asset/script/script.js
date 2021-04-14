"use strict";
window.addEventListener("scroll", (e) => {
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

})
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


// Ajout article dans le panier

const btnAdd = document.querySelectorAll('.app-add-cart');
btnAdd.forEach( btn => {
    btn.addEventListener('click', e => addCart(btn.getAttribute('data-id')))
})

const addCart = (id) => {
    console.log('salut')
    const url = '/cart.php?id=' + id;
    fetch(url)
        .then(res => res.json())
        .then(data => {
            showModal(data.article)
            console.log(data)
        })
}

const showModal = (article) => {
    const body = document.querySelector('body');

    const modale = document.createElement("div");
    modale.classList.add('modale');

    //article image
    const articleIMG = document.createElement('img')
    articleIMG.setAttribute('src', 'asset/images/' + article.img);


    const modaleContent = document.createElement('div')
    modaleContent.classList.add('modale-content');

    const h4 = document.createElement('h4');
    h4.textContent = "Le produit a été ajouté au panier";

    const h5 = document.createElement('h5');
    h5.textContent = article.name;

    const price = document.createElement('p');
    price.textContent = "Prix : " + article.prix + "€"

    const link = document.createElement('a');
    link.setAttribute("href",'/panier.php');
    link.textContent = "Voir mon panier";

    const btnClose = document.createElement("div");
    btnClose.classList.add("btn-close")
    btnClose.innerHTML = '<svg class="icon"><use xlink:href="asset/images/icon.svg#close"></use></svg>'

    modaleContent.appendChild(h4)
    modaleContent.appendChild(articleIMG)
    modaleContent.appendChild(h5)
    modaleContent.appendChild(price)
    modaleContent.appendChild(link)
    modaleContent.appendChild(btnClose)
    modale.appendChild(modaleContent);
    btnClose.addEventListener('click',hideModal);
    modale.addEventListener('click',e => {
        if(e.target !== modale){
            return 0;
        }
        hideModal();

    });

    body.appendChild(modale);
}
function hideModal() {
    const modale = document.querySelector(".modale");
    modale.remove()
}