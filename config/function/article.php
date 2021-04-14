<?php

require 'pdo.php';


//CRUD

function getArticles(){
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from articles');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function getArticleById(int $id) {
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from articles where id = :id');
    $req->bindValue('id',$id,PDO::PARAM_INT);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}

function updateArticle(Array $req)
{
    extract($req);
    $pdo = getDb();
    $query = "UPDATE articles SET name=?, stock=?, prix=? WHERE id=?";
    $res = $pdo->prepare($query);
    $res->execute([$name, $stock, $prix, $id]);

}