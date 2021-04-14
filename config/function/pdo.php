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
        $pdo->setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    catch(PDOException $e){
        die($e->getFile(). $e->getLine().$e->getMessage());
    }
}
