<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page inscription</h2>

    <form action="" method="post">
        <input type="text" name="pseudo">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="text" name="confirm_password">
        <input type="number" name="address_id">
        <button type="submit">ENVOYER</button>
    </form>
<?php include 'config/template/footer.php'; ?>

<?php if(isset($_POST)){
    $req = $pdo->prepare('INSERT INTO users(pseudo,email,password,address_id) VALUES ($pseudo,$email,$password,$address_id)');
    $req->execute();
}
