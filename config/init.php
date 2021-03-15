<?php

require('env.php');
//connexion PDO
define('HOST',$env['DB_HOST']);
define('NAME',$env['DB_NAME']);
define('USER',$env['DB_USER']);
define('PASSWORD',$env['DB_PASSWORD']);


function getDb(){
    try{
        $pdo = new PDO('mysql:host='. HOST .';dbname='. NAME ,USER , PASSWORD);
        return $pdo;
    }
    catch(PDOException $e){
        die($e->getFile(). $e->getLine().$e->getMessage());
    }
}
function signupFormValidation(Array $user){
    $error = "";
    if(strlen($user["pseudo"]) < 3 || strlen($user["pseudo"]) > 10){
        $error .= "&pseudo=true";
    }
    if(strlen($user["password"]) < 8){
        $error .= "&password=true";
    }

    if(!preg_match('@[A-Z]@', $user["password"]) || !preg_match('@[a-z]@', $user["password"]) || !preg_match('@[0-9]@', $user["password"]))
    {
        $error .= "&password2=true";
    }

    if($user["password"] != $user["confirm_password"]){
        $error .= "&confirm_password=true";

    }
    var_dump($error);
    return $error;
}

function createUser(Array $user){

    if(signupFormValidation($user)){
        return header("location: inscription.php?".signupformValidation($user));
    }

    extract($user);
    $passwordHash = password_hash($user['password'],PASSWORD_DEFAULT);

    $pdo = getDb();
    $req = $pdo->prepare("INSERT INTO users(pseudo,email,password,rue,cp,ville,role_id,sexe) values (:pseudo,:email,:password,:rue,:cp,:ville,:role_id,:sexe)");

    if($req->execute([
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => $passwordHash,
        'rue' => $rue,
        'cp' => $cp,
        'ville' => $ville,
        'role_id' => 1,
        'sexe' => $sexe

    ])){
        return header('Location: inscription.php?register=true');
    }else {
        var_dump($req->execute());
    }
}

function login(Array $user) {

    $userBDD = getUserByEmail($user['email']);
    if(password_verify($user['password'],$userBDD['password'])){
        $_SESSION['isLogged'] = true;
        $_SESSION['userID'] = $userBDD['id'];
        return header("location: index.php");
    }
}

function logout(){
    session_destroy();
    return header('location: index.php');
}
function getUsers(){
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from users');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}
function getRoles(){
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from roles');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function getUserByEmail(string $email) {
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from users where email = :email');
    $req->bindValue(':email',$email,PDO::PARAM_STR);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}
function getUserById(int $id) {
    $pdo = getDb();
    $req = $pdo->prepare('SELECT * from users where id = :id');
    $req->bindValue('id',$id,PDO::PARAM_INT);
    $req->execute();
    return $req->fetch(PDO::FETCH_ASSOC);
}

//variable d'affichage etc.

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
//constantes système 

require 'function.php';
