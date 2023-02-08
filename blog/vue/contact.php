<!-- 
//     dans le fichier contact.php
//     formulaire boostrap =>
//     email
//     commentaire
//  -->

<h1>Nous contacter</h1>

<form action="http://localhost/php-initiation/blog/traitement/form-contact.php" method="POST">

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email" required placeholder="email@example.com"
  value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : "" ?> ">
  </div>

<div class="mb-3">
  <label for="commentaire" class="form-label">Votre commentaire</label>
  <textarea name="commentaire" id="commentaire" cols="30" rows="4" class="form-control"></textarea>
</div>

  <div class=" mb-3">
  <input type="submit" class="btn btn-outline-primary btn-sm">
</div>
</form>

<?php if(!empty($_SESSION["message"])) :?>
    <?php if($_SESSION["message"]["alert"] === "sucess") : ?>
        <div class="alert alert-sucess">
            <?php echo $_SESSION["message"]["info"] ?>
        </div>


<?php endif ?>