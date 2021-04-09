<?php include 'config/template/head.php';?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<div class="background " style="background: linear-gradient(130.38deg, #FFE588 0%, rgba(255, 255, 255, 0) 100%),
linear-gradient(0deg, rgba(255, 229, 136, 0.4), rgba(255, 229, 136, 0.4));
; min-height: 100vh">
    <div class="container">
        <h2 class="text-center py-5">Mon panier</h2>
        <div class="row">
            <div class="col-xl-8">
                <div class="article-cart-group">
                    <?php
                    if(isset($_SESSION['cart'])){
                        foreach ($_SESSION['cart'] as $articleCart) :
                            $article = getArticleById($articleCart['id']); ?>
                            <div class="article-cart row align-items-center text-center mb-2">
                                <div class="col-12 col-sm-2">
                                    <img src="asset/images/<?= $article['img'] ?>" alt="the-noir" class=" mw-100 article-cart-img">
                                </div>
                                <div class="col-12 col-sm-5">
                                    <div class="article-cart-desc px-4">
                                        <h4><?= $article['name'] ?></h4>
                                        <p class="article-desc m-0">The noir du Sri-lanka</p>
                                        <p class="article-capacity m-0">Recharge 100g</p>
                                    </div>
                                </div>

                                <div class="col col-sm-3 mt-3 mt-sm-0">
                                    <div class="article-cart-qty">
                                        <div class="form-group">
                                            <label for="">Quantité</label>
                                            <form class="form-qty">
                                                <button class="plus" type="button">+</button>
                                                <input type="number" id="app-qty" class="form-control" name="qty" value="<?= $articleCart['qty'] ?>" max="20">
                                                <button class="minus" type="button">-</button>
                                            </form>
                                            <form action="" method="post" class="my-2">
                                                <input type="hidden" value="<?= $articleCart['id'] ?>" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm" name="send" value="delete-cart">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2 py-3 py-sm-0">
                                    <div class="article-cart-price d-flex justify-content-between align-items-center d-sm-block">
                                        <p>Montant total</p>
                                        <p class="price"><?= $articleCart['price'] ?> €</p>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach;
                    }

                    ?>
                </div>
            </div>
            <div class="col-xl-4 my-4 my-xl-0">
                <form method="" action="post" class="cart-resume">
                    <div class="form-group">
                        <label for="">Saisissez le code promotionnel</label>
                        <input type="text" class="form-control" placeholder="Entrez le code">
                        <small>Si vous possédez un bon d’achat, utilisez-le lors du paiement</small>
                    </div>

                    <p>Livraison</p>
                    <div class="order-price px-3">6.99€</div>
                    <div class="d-flex justify-content-between my-3 text-grey">
                        <p>Total</p>
                        <p><?= getTotalCart(); ?> €</p>
                    </div>
                    <button type="submit" class="btn btn-block btn-secondary my-3">Commandez</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'config/template/footer.php'; ?>