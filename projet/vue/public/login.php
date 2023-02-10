<h1>$connexion</h1>

<form action="lib/traitement-login.php" method="POST" class="row">
    <div class="col-3 offset-3"  >
    <input type="text" placeholder="votre login" required name="login">
    </div>

    <div class="col-3">
    <input type="password" placeholder="cotre mot de passe" class="form-control col-3" required name="password">
    </div>

    <div class="col-12 d-flex justify-content-center mt-4">
        <input type="submit" class="btn btn-primary">

    </div>

</form>


<?php require "lib/message-flash.php" ?>