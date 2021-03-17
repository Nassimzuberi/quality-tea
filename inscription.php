
<?php if(isset($_GET['register']) && $_GET['register'] == true) : ?>
    <div class="alert alert-success">Inscription validée</div>

<?php endif ?>
<form action="" method="post" class="form-signup px-3 px-md-5 py-3 bg-light">
    <h4 class="mt-3">Créer un compte</h4>
    <hr>
    <div class="form-group">
        <label for="" class="form-label">Genre*</label><br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sexe" value="Femme" id="femme" class="custom-control-input" required>
            <label for="femme" class="custom-control-label" >Femme</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sexe" value="Homme" id="homme" class="custom-control-input" required>
            <label for="homme" class="custom-control-label">Homme</label>

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Prenom</label>
            <input type="text" name="firstname" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="">Nom</label>
            <input type="text" name="lastname" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Pseudo*</label>
            <input type="text" name="pseudo" class="form-control" required>

            <?php if(isset($_GET['pseudo'])) : ?>
                <div class="alert alert-danger">Le pseudo doit comprendre entre 3 et 10 caractères</div>
            <?php endif ?>
        </div>
        <div class="form-group col-md-6">
            <label for="">Email*</label>
            <input type="email" name="email" class="form-control" required>

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Adresse*</label>
            <input type="text" name="rue" class="form-control" required>


        </div>
        <div class="form-group col-md-6">
            <label for="">Code postale*</label>
            <input type="number" name="cp" class="form-control" required>

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Ville*</label>
            <input type="text" name="ville" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Pays*</label>
            <input type="text" name="pays" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Mot de passe*</label>
            <input type="password" name="password" class="form-control <?= isset($_GET['password']) || isset($_GET['password2']) ? "is-invalid" : '' ?>" required>
            <?php if(isset($_GET['password'])) : ?>
                <div class="invalid-feedback">Le mot de passe doit faire 8 caractères minimum</div>
            <?php endif ?>
            <?php if(isset($_GET['password2'])) : ?>
                <div class="invalid-feedback">Le mot de passe doit comprendre 1 majuscule, 1 minuscule et 1 chiffre minimum</div>
            <?php endif ?>

        </div>
        <div class="form-group col-md-6">
            <label for="">Confirmez le mot de passe*</label>
            <input type="password" name="confirm_password " class="form-control <?= isset($_GET['confirm_password']) ?? "is-invalid" ?>" required>
            <?php if(isset($_GET['confirm_password'])) : ?>
                <div class="invalid-feedback">Les mots de passes ne sont pas identiques </div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Numéro de téléphone</label>
            <input type="tel" name="tel" class="form-control">
        </div>
    </div>
    <div class="text-center">
        <button type="submit" name="send" value="signup" class="btn btn-primary text-uppercase">Créer un compte</button>

    </div>
</form>