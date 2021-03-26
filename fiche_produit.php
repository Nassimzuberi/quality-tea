
<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<main class="container pt-5">
    <?php

    if(isset($_GET)){
        $article = getArticleById($_GET['id']);
    } else{

    }
    ?>

    <?php if($article) : ?>

        <?= $article['name'] ?>
        <?= $article['stock'] ?>



    <?php else : ?>
        <div class="row my-5 pt-5">
            <div class="col-xl text-center ">
                <img src="asset/the-noir-vietnam-bio%201.png" alt="thé-noir" class="w-100">
            </div>
            <div class="col-xl mx-auto">
                <div class="card px-5 bg-secondary w-100 h-100 justify-content-center py-3">
                    <div class="d-flex justify-content-between">
                        <h3>White Bellini bio</h3>
                        <p class="price">18.80€</p>
                    </div>
                    <p class="article-desc">Thé noir du Sri Lanka</p>
                    <p class="article-capacity">Recharge 100g</p>
                    <div>
                        <?php for($i=0; $i<4;$i++)  : ?>
                            <img src="asset/star-s.svg" alt="star-s">
                        <?php endfor;?>
                        <?php for($i=0;$i<1;$i++) : ?>
                            <img src="asset/star-r.svg" alt="star-s">
                        <?php endfor;?>
                        6 avis
                    </div>
                    <form action="" method="post" class="my-3">
                        <!--                <input type="hidden" name="id" value="--><?//= $article['id'] ?><!--"><br>-->
                        <div class="form-group">
                            <label for="" class="text-grey">Quantité</label>
                            <div class="form-qty">
                                <button class="plus" type="button">+</button>
                                <input type="number" id="app-qty" class="form-control" name="qty" value="1" max="20" disabled>
                                <button class="minus" type="button">-</button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-secondary" name="send" value="add-cart">Ajoutez</button>
                    </form>
                    <a href="" class="text-center text-grey my-3">Information sur la livraison</a>
                    <div class="text-success text-center">Disponible</div>
                </div>
            </div>
        </div>
    <?php endif;?>
</main>

<?php include 'config/template/footer.php'; ?>