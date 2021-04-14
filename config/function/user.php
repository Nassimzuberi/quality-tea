<?php

require_once 'pdo.php';


// Permet de savoir si l'utilisateur connecté est admin ou non
function isAdmin(){
    if(isset($_SESSION['isLogged'])){
        $user = getUserById($_SESSION['userID']);
        return $user['role_id'] == 2 ? true : false;
    }
    return false;
}

function isLogged(){
    return isset($_SESSION['isLogged']);
}


function getError(string $key) {
    if(isset($_SESSION['error'][$key])){
        $error = $_SESSION['error'][$key];
        echo $error;
        unset($_SESSION['error'][$key]);
    }
    return false;
}

function hasError(string $key){
    return isset($_SESSION['error'][$key]) ? true : false;
}

function hasSuccess(string $key){
    return isset($_SESSION['success'][$key]) ? true : false;

}

function getSuccess(string $key) {
    if(isset($_SESSION['success'][$key])){
        $success = $_SESSION['success'][$key];
        echo $success;
        unset($_SESSION['success'][$key]);
    }
    return false;
}

function signupFormValidation(Array $user){
    if(strlen($user["pseudo"]) < 3 || strlen($user["pseudo"]) > 10){
        $_SESSION['error']['pseudo'] = "Le pseudo doit faire entre 3 et 10 caractères";
    }
    if(strlen($user["password"]) < 8){
        $_SESSION['error']['password'] = "Le mot de passe doit faire 8 caractères minimum";
    }
    if(!filter_var($user["email"],FILTER_VALIDATE_EMAIL)){
        $_SESSION['error']['email'] = "L'adresse mail doit être valide'";
    }

    if(!preg_match('@[A-Z]@', $user["password"]) || !preg_match('@[a-z]@', $user["password"]) || !preg_match('@[0-9]@', $user["password"]))
    {
        if(hasError('password')){
            $_SESSION['error']['password'] .= " <br>Le mot de passe doit comprendre 1 majuscule, 1 minuscule et 1 chiffre minimum";
        } else {
            $_SESSION['error']['password'] = "Le mot de passe doit comprendre 1 majuscule, 1 minuscule et 1 chiffre minimum";
        }
    }

    if($user["password"] != $user["confirm_password"]){
        $_SESSION['error']['confirm_password'] = "Les mots de passes ne sont pas identiques ";


    }

    return isset($_SESSION['error']) ? false : true;

}

function createUser(Array $user){

    if(!signupFormValidation($user)){
        return 0;
    }

    extract($user);
    $passwordHash = password_hash($user['password'],PASSWORD_DEFAULT);

    $pdo = getDb();
    $req = $pdo->prepare("INSERT INTO users(pseudo,firstname,lastname,email,password,rue,cp,ville,country,role_id,sexe) values (:pseudo,:firstname,:lastname,:email,:password,:rue,:cp,:ville,:country,:role_id,:sexe)");
    if($req->execute([
        'pseudo' => $pseudo,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $passwordHash,
        'rue' => $rue,
        'cp' => $cp,
        'ville' => $ville,
        'country' => $country,
        'role_id' => 1,
        'sexe' => $sexe

    ])){
        $_SESSION['success']['signup'] = "Inscription validée";

    }else {
        $_SESSION['error']['signup'] = "Une erreur est survenue, veuillez réessayer";
    }
}


// CONNEXION
function login(Array $user) {

    $userBDD = getUserByEmail($user['email']);
    if(password_verify($user['password'],$userBDD['password'])){
        $_SESSION['isLogged'] = true;
        $_SESSION['userID'] = $userBDD['id'];
        return header("location: index.php");
    } else {
        $_SESSION['error']['login'] = "Les identifiants sont incorrects";
    }

}

// DECONNEXION
function logout(){
    session_destroy();
    return header('location: / ');
}

// CRUD

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
