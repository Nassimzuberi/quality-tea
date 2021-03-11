<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page profil</h2>
<p>

</p>
<?php if(isset($_SESSION["isLogged"])){
    $user = getUserById($_SESSION['userID']);
    echo $user['role_id'] == 1 ? "Vous etes un utilisateur" : "Vous êtes un administrateur";

} else {
    echo "Vous êtes un simple visiteur";
}
?>
<hr>
<?php include 'config/template/footer.php'; ?>