<?php $title = "Tous nos produits |"; ?>
<?php include 'config/template/head.php'; ?>

<?php $articles = getArticles(); ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>

<main>
    <section class="container background">
        <h2 class="text-center mt-5 mb-5">Nos produits</h2>

        <div id="trait_dessus" class="mx-auto mb-5"></div>
        <div class="row">
            <?php foreach ($articles as $article) : ?>
                <div class="col-xl-4 my-2 my-md-0">
                    <div class="box px-5 py-3 text-center">
                        <img src="asset/images/<?= $article['img'] ?>" alt="the-noir">
                        <div class="article-description">
                            <a href="fiche_produit.php?id=<?= $article['id'] ?>"><?= $article['name'] ?></a>
                        </div>
                        <div class="d-flex rating justify-content-center my-3">
                            <?php for($i=0; $i<4;$i++)  : ?>
                                <svg class="icon"><use xlink:href="asset/images/icon.svg#star-s"></use></svg>
                            <?php endfor;?>
                            <?php for($i=0;$i<1;$i++) : ?>
                                <svg class="icon"><use xlink:href="asset/images/icon.svg#star-r"></use></svg>
                            <?php endfor;?>
                            6 avis
                        </div>
                        <p class="price"><?= $article['prix'] ?> €</p>
                        <a href="fiche_produit.php?id=<?= $article['id'] ?>" class="btn btn-primary btn-block" >Voir le produit</a>
                        <button type="button" class="btn btn-secondary btn-block app-add-cart my-3" data-id="<?= $article['id'] ?>">Ajoutez</button>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>



<?php include 'config/template/footer.php'; ?>

