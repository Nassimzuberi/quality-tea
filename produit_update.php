
<?php include 'config/template/head.php';
!isAdmin() ?? header('location: user.php?p=login')
?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<main class="container pt-5">
    <?php
    if(isset($_GET['id'])){
        $article = getArticleById($_GET['id']);
    }
    ?>

    <?php if($article) : ?>
        <div class="row my-5 pt-5">
            <div class="col-xl text-center ">
                <img src="asset/images/<?= $article['img'] ?>" alt="thé-noir" class="w-100">
            </div>
            <div class="col-xl mx-auto">
                <div class="card px-5 bg-secondary w-100 h-100 justify-content-center py-3">
                    <h3 class="text-center">Update de l'article n°<?= $article['id'] ?></h3>
                    <form action="" method="post" class="my-3">
                        <input type="hidden" name="id" value="<?= $article['id'] ?>">
                        <div class="form-group">
                            <label for="" class="text-grey">Nom</label>
                            <input type="text"  class="form-control" name="name" value="<?= $article['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-grey">Prix</label>
                            <input type="number"  class="form-control" name="prix" value="<?= $article['prix'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-grey">Stock</label>
                            <input type="number" class="form-control" name="stock" value="<?= $article['stock'] ?>">
                        </div>
                        <button type="submit" class="btn btn-block btn-secondary" name="send" value="update">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    <?php else : ?>


    <?php endif;?>
</main>

<?php include 'config/template/footer.php'; ?>