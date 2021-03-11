<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page login</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">ENVOYER</button>
    </form>
<hr>
<?php include 'config/template/footer.php'; ?>


<?php if(isset($_POST)){
    login($_POST);
}
if(isset($_SESSION)){
    var_dump($_SESSION);
}

