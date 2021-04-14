
<?php if(hasSuccess("signup")) : ?>
    <div class="alert alert-success"><?= getSuccess("signup") ?></div>

<?php endif ?>
<form action="" method="post" class="form-signup px-3 px-md-5 py-3 bg-light mb-5">
    <h5 class="mt-3">Créer un compte</h5>
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
            <input type="text" name="pseudo" class="form-control <?= hasError('pseudo') ? "is-invalid" : ''?>" required>

            <?php if(hasError('pseudo')) : ?>
                <div class="invalid-feedback"><?= getError('pseudo') ?></div>
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
            <input type="text" name="country" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Mot de passe*</label>
            <input type="password" name="password" class="form-control <?= hasError('password') ? "is-invalid" : '' ?>" required>
            <?php if(hasError('password')) : ?>
                <div class="invalid-feedback"><?= getError('password') ?></div>
            <?php endif ?>

        </div>
        <div class="form-group col-md-6">
            <label for="">Confirmez le mot de passe*</label>
            <input type="password" name="confirm_password" class="form-control <?= hasError('confirm_password') ? "is-invalid" : ''?>" required>
            <?php if(hasError('confirm_password')) : ?>
                <div class="invalid-feedback"><?= getError('confirm_password') ?> </div>
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
        <button type="submit" name="send" value="signup" class="btn btn-secondary">Créer un compte</button>

    </div>
</form>