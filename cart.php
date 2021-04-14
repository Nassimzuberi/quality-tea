<?php
session_start();
include 'config/init.php';


addCart([
    'id' => $_GET['id'],
    'qty' => 1
]);

$article = getArticleById($_GET['id']);
echo json_encode([
    'status' => 'success',
    'article' => $article,
]);