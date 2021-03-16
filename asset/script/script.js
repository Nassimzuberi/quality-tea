"use strict";

document.querySelector(".form-search-input").addEventListener("focusin", (elem) => {
    elem.target.style.width = "150px"
})
document.querySelector(".form-search-input").addEventListener("focusout", (elem) => {
    elem.target.style.width = "25px"
})