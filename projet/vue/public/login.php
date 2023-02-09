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


<!--  le style A RAJOUTER + -->
<!-- DONNE LE MESSAGE D'ERREUR ou l'accés au tableau de bord -->
<?php if(!empty($_SESSION["message"])) : ?>
    <?php if($_SESSION["message"]["alert"] === "success") : ?> 
        <p class="white-text green" 
           style="padding:5px 10px">
           <?php echo $_SESSION["message"]["info"]  ?>
        </p>
    <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
        <p class="white-text pink" 
           style="padding:5px 10px">
           <?php foreach($_SESSION["message"]["info"] as $i) : ?>
             <?php echo $i  ?><br>
           <?php endforeach ?>
        </p>
    <?php endif ?>
<?php endif ?>