<?php

require('function/article.php');
require('function/user.php');
require('function/cart.php');

if(isset($_POST["send"]) && $_POST["send"] == "signup"){
    createUser($_POST);
} else if(isset($_POST['send']) && $_POST['send'] == "login"){
    login($_POST);
} else if(isset($_POST['send']) && $_POST['send'] == "logout"){
    logout($_POST);
} else if(isset($_POST['send']) && $_POST['send'] == "add-cart"){
    addCart($_POST);
    $_SESSION['success']['cart'] = "Le produit a été ajouté au panier";
} else if(isset($_POST['send']) && $_POST['send'] == "delete-cart"){
    deleteCart($_POST);
} else if(isset($_POST['send']) && $_POST['send'] == "update"){
    updateArticle($_POST);
}





//constantes système 

require 'function.php';
