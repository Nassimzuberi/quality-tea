<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page inscription</h2>
<?php if(isset($_GET['register']) && $_GET['register'] == true) : ?>
<div class="alert alert-success">Inscription validée</div>

<?php endif ?>

<div class="container">
    <form action="" method="post">

        <div class="form-row">
            <input type="text" name="pseudo" placeholder="Pseudo"><br>

        </div>

        <?php if(isset($_GET['pseudo'])) : ?>
            <div class="alert alert-danger">Le pseudo doit comprendre entre 3 et 10 caractères</div>
        <?php endif ?>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <?php if(isset($_GET['password'])) : ?>
            <div class="alert">Le mot de passe doit faire 8 caractères minimum</div>
        <?php endif ?>
        <?php if(isset($_GET['password2'])) : ?>
            <div class="alert">Le mot de passe doit comprendre 1 majuscule, 1 minuscule et 1 chiffre minimum</div>
        <?php endif ?>
        <input type="password" name="confirm_password" placeholder="confirm password"><br>
        <?php if(isset($_GET['confirm_password'])) : ?>
            <div class="alert">Les mots de passes ne sont pas identiques </div>
        <?php endif ?>
        <input type="text" name="rue" placeholder="Rue">
        <input type="number" name="cp" placeholder="Code postale">
        <input type="text" name="ville" placeholder="Ville"><br>
        <input type="radio" name="sexe" value="Femme"><label for="">Femme</label>
        <input type="radio" name="sexe" value="Homme"><label for="">Homme</label><br>
        <button type="submit" name="send" value="signup">ENVOYER</button>
    </form>
</div>

<?php include 'config/template/footer.php'; ?>

<?php if(isset($_POST["send"]) && $_POST["send"] == "signup"){
    createUser($_POST);
}
