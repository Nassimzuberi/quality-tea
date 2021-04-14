<?php
include ('config/init.php');
if(isAdmin()){
    $pdo = getDb();
    $req = "DELETE FROM articles WHERE id =  :id";
    $res = $pdo->prepare($req);
    $res->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $res->execute();
    header('location: profil.php');
} else {
    header('user.php?p=login');
}
