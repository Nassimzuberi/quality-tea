
<?php
$articles = [];
if(isset($_SESSION['panier'])){

    foreach($_SESSION['panier'] as $article){
        $articles.array_push(getArticleById($article['id']));
    }
}
?>

<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page panier</h2>

<?php foreach ($articles as $article) : ?>
<div class="title"><?= $article['name'] ?></div>

<?php endforeach; ?>
<hr>
<?php include 'config/template/footer.php'; ?>