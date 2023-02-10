<?php if(isset($user)):?>

<h1 class="mb-4">Mettre à jour un profil user user</h1>
<?php else : ?>
    <h1 class="mb-4">Ajouter un nouveau profil</h1>
    <?php endif ?>

<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>

    <div class="col">
        <form action="lib/traitement-user.php" method="POST">

        <div class="mb-3">
                <label for="nom">saisir le nom</label>
                <input type="text" id="nom" class="form-control" name="nom" placeholder="le nom" value="<?php echo isset($user) ? $user["nom"] : "" ?>">
            </div>

            <div class="mb-3">
                <label for="email">saisir l'email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="votre email
                
                value="<?php echo isset($user) ? $user["email"] : "" ?>">
            </div>

            <div class="mb-3">
                <?php if($user) : ?>
                <label for="password">
                    laisser le champ  le mot de passe vide si vous voulez pas le modifier
                </label>
                
                <input type="text" id="password" class="form-control" name="password" placeholder="votre mot de passe">


                <div class="mb-3">
                    <label for="actif">
                    <input type="checkbox" name="actif" <?php echo isset($user) ? $user["status"] == 1 ? "checked": "" ?>> status >
                    </label>

                </div>
                <?php if($user) : ?>
                    //  <-- champ qui permet de d istinguer entre INSERT et l'UPDATE -->

            </div>

            <div class="mb-3">
                <input type="btn btn-btn-succecess">

            </div>
        </form>
        <?php require "lib/message-flash.php" ?>

    </div>