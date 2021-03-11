<nav class="nav">
    <a class="nav-link" href="index.php">Accueil</a>
    <?php if(isset($_SESSION['isLogged'])) : ?>
    <a href="" class="nav-link"
       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Déconnexion</a>
        <form method="post" id="logout-form" action=""><input type="hidden" name="deconnexion"></form>
    <?php endif; ?>

    <?php if(!isset($_SESSION['isLogged'])) : ?>
        <a class="nav-link" href="inscription.php">Inscription</a>
        <a class="nav-link" href="login.php">Login</a>
    <?php endif; ?>
    <a class="nav-link" href="profil.php">Profil</a>

    <a class="nav-link" href="panier.php">Panier</a>
</nav>

<?php if(isset($_POST['deconnexion'])){
    logout();
}