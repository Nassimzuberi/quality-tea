<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<body>
<div class="home">
    <div class="banniere_image">
    <a href=""></a>
    <img src="twitter (1).svg" alt="twitter_icon">
    </div>
    <div class="titre">
        <h1 class="big-title">Qualitea</h1>
        <h2>Thé & infusions</h2>
    </div>
        <div class="sous-titre">
            <p>Qualitea vous invite à travers une sélection exigeante de thés d'origine exceptionnels 
            et de créations parfumées irrésistibles.</p>
        </div>

</div>

    <div class="container">
        <h3 class="title text-center">Notre sélection du moment</h3>
        <div 
            id="trait_dessus">
        </div>
        <div class="row">
            <div class="col-4 ">
                <div class="box px-5 py-3 text-center">
                    <img src="asset/images/the-noir-vietnam-bio.png">
                        <h4>White Bellini Bio</h4>
                        <p>Recharge 100g</p>
                        <div class="rating">
                                <p>18,80€</p>;
                                <button type="button" class="btn btn-primary btn-lg">Ajoutez</button>
                        </div>
                </div>
            </div>
                <div class="col-4">
                    <div class="box px-5 py-3 text-center">
                        <img src="asset/images/the-vert-sencha-bio-feuille.jpg">
                            <h4>Vert Bio</h4>
                            <h6>Recharge 100g</h6>
                            <div class="rating">
                                    <p>11,00€</p>
                                    <button type="button" class="btn btn-primary btn-lg">Ajoutez</button>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                <div class="box px-5 py-3 text-center">
                    <img src="asset/images/the-noir-keemun.jpg">
                        <h4>English Breakfast Bio</h4>
                        <h6>Recharge 100g</h6>
                        <div class="rating">
                            <p>11,00€</p>
                            <button type="button" class="btn btn-primary btn-lg">Ajoutez</button>
                        </div>
                </div>
    </div>
<section class="offers">
    <div class="first-img">
        <div class="text-second-img">
            <h3 class="first-texte">Nos thés natures</h3>
            <h4>Pour un retour à l'essentiel !</h4>
        </div>
    </div>
    <div class="second-img">
        <div class="text-second-img">
            <h3>Nos thés blancs</h3>
            <h4>Laissez-vous transporter par leur délicatesse</h4>
        </div>
    </div>
</section>
<section class="newsletter">
    <h3 class="second-title">Inscrivez-vous à notre newsletter pour recevoir nos offres et actualités</h3>
            <div 
                id="second-trait-dessus">
            </div>
            <div class="input-email">
                <form>
                    <input type="text" name="" placeholder="Votre email">
                    <input type="submit" name="" value="Vérifier">
                </form>
            </div>
            <p>
                En cliquant sur “Vérifier”, vous acceptez expressément de recevoir les offres commerciales et les 
                actualités de Qualitea par email selon les conditions de notre Politique de Confidentialité disponible ici.
            </p>
            
</section>
<section class="social-menu">
        <ul>
            <i class="fab fa-facebook"></i>
            <li><a href="#"><img src="twitter (1).svg" alt=""><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><img src="instagram.svg" alt=""><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><img src="pinterest-social-logo.svg" alt=""><i class="fa fa-pinterest"></i></a></li>
        </ul>
</section>
</body>
<h2 class="text-center mt-5 mb-5">Page Accueil</h2>
<hr>
<?php include 'config/template/footer.php'; ?>

<?php $title = "Page d'accueil |"; ?>
