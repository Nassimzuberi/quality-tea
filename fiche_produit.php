<?php
    if(isset($_GET)){
        $article = getArticleById($_GET['id']);
    }
?>

<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>
<?php if($article) : ?>

<?= $article['name'] ?>
<?= $article['stock'] ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $article['id'] ?>"><br>
        <input type="number">
        <button type="submit">Ajouter au panier</button>
    </form>
<?php else : ?>
<div>L'article n'existe pas</div>

<?php endif;?>
<hr>
<?php include 'config/template/footer.php'; ?>