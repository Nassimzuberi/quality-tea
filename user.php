<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>

<div class="background " style="background: linear-gradient(130.38deg, #FFE588 0%, rgba(255, 255, 255, 0) 100%),
linear-gradient(0deg, rgba(255, 229, 136, 0.4), rgba(255, 229, 136, 0.4));
; min-height: 100vh">


    <div class="container">
        <div class="login-nav nav d-flex justify-content-center">
            <a href="" class="nav-link mx-5" id="app-login">Connexion</a>
            <a href="" class="nav-link mx-5" id="app-signup">Créer un compte</a>
        </div>
        <hr>

        <div class="login active">
            <?php require './login.php'; ?>
        </div>

        <div class="signup" style="display: none">
            <?php require './inscription.php'; ?>
        </div>

    </div>
</div>


<?php include 'config/template/footer.php'; ?>

<script>
    document.querySelector("#app-login").addEventListener("click", (e) => {
        e.preventDefault();

        if(document.querySelector(".login").classList.contains("active")){
            return 0;
        } else {
            document.querySelector(".login").classList.add("active");
            document.querySelector(".signup").classList.remove("active");
            document.querySelector(".login").style.display = "block";
            document.querySelector(".signup").style.display = "none";
        }

    });
    document.querySelector("#app-signup").addEventListener("click", (e) => {
        e.preventDefault();
        if(document.querySelector(".signup").classList.contains("active")){
            return 0;
        } else {
            document.querySelector(".signup").classList.add("active");
            document.querySelector(".login").classList.remove("active");
            document.querySelector(".signup").style.display = "block";
            document.querySelector(".login").style.display = "none";
        }

    });
</script>
