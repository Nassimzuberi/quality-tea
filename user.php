<?php !isset($_GET['p']) ? header('location: ?p=login') : ""; ?>

<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>

<div class="background " style="background: linear-gradient(130.38deg, #FFE588 0%, rgba(255, 255, 255, 0) 100%),
linear-gradient(0deg, rgba(255, 229, 136, 0.4), rgba(255, 229, 136, 0.4));
; min-height: 100vh">
    <div class="container">
        <div class="login-nav nav d-flex justify-content-center mb-5">
            <a href="?p=login" class="nav-link mx-5 <?= isset($_GET['p']) && $_GET['p'] == 'login' ? 'active' : '' ?>" id="app-login">Connexion</a>
            <a href="?p=signup" class="nav-link mx-5 <?= isset($_GET['p']) && $_GET['p'] == 'signup' ? 'active' : '' ?>" id="app-signup">Créer un compte</a>
        </div>


        <?php if(isset($_GET['p']) && $_GET['p'] == 'login'){
            require './login.php';
        } else if(isset($_GET['p']) && $_GET['p'] == 'signup'){
            require './inscription.php';
        }
        ?>

    </div>
</div>


<?php include 'config/template/footer.php'; ?>

