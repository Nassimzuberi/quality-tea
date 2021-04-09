<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>

<div class="background">
    <h2 class="text-center mt-5 mb-5">Page profil</h2>
    <?php if(isset($_SESSION["isLogged"])){
        $user = getUserById($_SESSION['userID']);
        if($user['role_id'] == 1): ?>
        Tu es un simple utilisateur
        <?php elseif ($user['role_id'] == 2) :
            $articles = getArticles(); ?>

            <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom du produit</th>
                <th scope="col">Stock</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach ($articles as $article):?>

                <tr>
                    <th scope="row"><?= $article['id'] ?></th>
                    <td><?= $article['name'] ?></td>
                    <td><?= $article['stock'] ?></td>
                    <td><?= $article['prix'] ?></td>
                    <td>
                        <a href="./fiche_produit.php?id=<?= $article['id'] ?>" class="btn" target="_blank" rel="noopener">Show</a>
                        <a href="./produit_update.php?id=<?= $article['id'] ?>" class="btn" target="_blank" rel="noopener">Update</a>
                    </td>
                </tr>

        <?php endforeach ?>
            </tbody>
            </table>
        <?php endif;
    }
    ?>

    <hr>
</div>

<?php include 'config/template/footer.php'; ?>