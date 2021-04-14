<?php
$title = "Mon compte |";

include 'config/template/head.php';
if(!isset($_SESSION['isLogged'])){
    header('location: user.php');
}
?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<main>
    <div class="background">
        <h2 class="text-center mt-5 mb-5">
            Mon compte
            <span>
            <a href="" class="text-center text-danger"
               onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
        <svg class="icon text-danger" ><use xlink:href="asset/images/icon.svg#logout"></use></svg>
    </a>
        </span>
        </h2>

        <form method="post" id="logout-form" action=""><input type="hidden" name="send" value="logout"></form>
        <?php $user = getUserById($_SESSION['userID']); ?>
        <div class="container">
            <h4 >Mes informations</h4>
            <div class="row my-3 mb-5">
                <div class="col-3">Nom</div><div class="col-9"><?= $user['firstname'] ?> <?= $user['lastname'] ?> </div>
                <hr>
                <div class="col-3">Adresse mail</div><div class="col-9"><?= $user['email'] ?> </div>
                <hr>
                <div class="col-3">Sexe</div><div class="col-9"><?= $user['sexe'] ?> </div>
                <hr>
                <div class="col-3">Adresse</div><div class="col-9"><?= $user['rue'] ?> <br> <?= $user['cp'] ?> <?= $user['ville'] ?>
                    <br> <?= $user['country'] ?></div>
                <hr>
                <div class="col-3">Numéro de téléphone</div><div class="col-9"><?= $user['tel'] ?? "Non renseigné" ?> </div>
                <hr>
                <div class="col-3">Statut</div><div class="col-9"><?= $user['role_id'] == 1 ? "User" : "Admin" ?> </div>
            </div>


            <?php if ($user['role_id'] == 2) :
                $articles = getArticles(); ?>
                <h4 class="my-3">Espace administrateur</h4>

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
                                <a href="./produit_delete.php?id=<?= $article['id'] ?>" class="btn" target="_blank" rel="noopener">Delete</a>

                            </td>
                        </tr>

                    <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif; ?>

        </div>

    </div>
</main>


<?php include 'config/template/footer.php'; ?>