<?php

require ('env.php');
//connexion PDO
$pdo = new PDO('mysql:host='.$env['DB_HOST'].';dbname='.$env['DB_NAME'], $env['DB_USER'], $env['DB_PASSWORD']);
$req = $pdo->prepare('SELECT * from users');
$users = $req->fetchAll();
var_dump($users);
//variable d'affichage etc.



//constantes système 

require 'function.php';
