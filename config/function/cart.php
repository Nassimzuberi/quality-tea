<?php

require_once ('article.php');

function addCart(Array $req){
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    $product = getArticleById($req['id']);
    foreach ($_SESSION['cart'] as $key => $article){
        if($article['id'] == $req['id']){
            $_SESSION['cart'][$key]['qty'] += $req['qty'];
            $_SESSION['cart'][$key]['price'] = $_SESSION['cart'][$key]['qty'] * $product['prix'];
            return 0;
        }
    }
    array_push($_SESSION['cart'], [
        'id' => $req['id'],
        'qty' => $req['qty'],
        'price' => $req['qty'] * $product['prix'],
    ]);

}

function deleteCart(Array $req){
    foreach ($_SESSION['cart'] as $key => $article){

        if($article['id'] == $req['id']){

            unset($_SESSION['cart'][$key]);
            return 0;
        }
    }
}

function getTotalCart(){
    $total = 0;
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $article){
            $total += $article['price'];
        }
    }

    return $total;
}
