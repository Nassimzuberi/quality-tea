<?php include 'config/template/head.php';
$articles = getArticles();
?>
<header>
    <?php include 'config/template/home-nav.php'; ?>
</header>
<body>
<main>
    <section class="home">
        <div class="titre">
            <h1 class="big-title">Qualitea</h1>
            <h2>Thé & infusions</h2>
        </div>
        <div class="icon-home">
            <a href=""><img src="asset/images/twitter (1).svg" alt="twitter_icon"></a>
            <a href=""><img src="asset/images/instagram.svg" alt="instagram_icon"></a>
        </div>
        <div class="sous-titre">
            <p>Qualitea vous invite à travers une sélection exigeante de thés d'origine exceptionnelles <br>
                et de créations parfumées irrésistibles.</p>

            <div class="scroll-btn text-center mx-auto mt-5">
                <img src="asset/images/arrow-down.svg" alt="arrow-down" style="width:24px;height:40px;">
            </div>
        </div>

    </section>

    <section class="container ">
        <h3 class="my-5 text-center selection">Notre sélection du moment</h3>
        <div id="trait_dessus" class="mx-auto mb-5"></div>
        <div class="row">
            <?php foreach ($articles as $article) : ?>
                <div class="col-xl-4 my-2 my-md-0">
                    <div class="box px-5 py-3 text-center">
                        <img src="asset/images/<?= $article['img'] ?>" alt="the-noir">
                        <div class="article-description">
                            <a href="fiche_produit.php?id=<?= $article['id'] ?>"><?= $article['name'] ?></a>
                            <p class="article-capacity">Recharge 100g</p>
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
                        <button type="button" class="btn btn-primary btn-block">Ajoutez</button>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <section class="offers">
                <div class="first-img category">
                    <div class="text-second-img text-white">
                        <h3 class="first-texte">Nos thés natures</h3>
                        <p>Pour un retour à l'essentiel !</p>
                    </div>
                </div>
                <div class="second-img category">
                    <div class="text-second-img text-white">
                        <h3>Nos thés blancs</h3>
                        <p>Laissez-vous transporter par leur délicatesse</p>
                    </div>
                </div>
            </section>
        </div>
        <section class="newsletter">
            <h3 class="second-title">Inscrivez-vous à notre newsletter pour recevoir nos offres et actualités</h3>
            <form class="input-email d-flex  w-100">
                <input type="text" name="" placeholder="Votre email" class="form-control">
                <button type="submit" class="btn btn-third">S'abonner</button>
            </form>
            <p class="newsletter-text text-center my-3">
                En cliquant sur “Vérifier”, vous acceptez expressément de recevoir les offres commerciales et les
                actualités de Qualitea par email selon les conditions de notre Politique de Confidentialité disponible ici.
            </p>

        </section>
    </section>
</main>



<?php include 'config/template/footer.php'; ?>

