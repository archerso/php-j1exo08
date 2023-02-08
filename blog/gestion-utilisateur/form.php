
<!-- // http://localhost/php-initiation/gestion-utilisateur/form.php
//nom input de type text
//email input de type email 
//password input de type password 
//menu déroulant role => rédacteur / admin / user 
//dt_creation 
//case à cocher (si c'est coché => actif / décoché inactif)
//bouton pour soumettre le formulaire  -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Form</title>
</head>
<body>
<form action="traitement.php" method="POST" mb-3 >
<h1>Formulaire</h1>

<div class="mb-3 ">
<label for="nom" id="nom">Votre nom</label>
<input type="nom"  id="nom" value="nom"  placeholder="votre nom">
</div>

<div class="mb-3 ">
<label for="email" id="email">Email</label>
<input type="email"  id="email" value=""  placeholder="votre email@monmail.fr">
</div>

<div class="mb-3  zone-password">
<label for="password" id="password">MDP</label>
<input type="password"  id="password" value="password">
<button class="show-password">show</button>

</div>

<div class="mb-3 ">
<label for="role" placeholder="Veuillez choisir votre role">Votre role</label>
<select>
  <option value="User">User</option>
  <option value="Redacteur">Rédacteur</option>
  <option value="Admin">Admin</option>
</select>

<div class="mb-3">
                <label for="dt_creation">date de création du profil</label>
                <input type="date" id="dt_creation" name="dt_creation" required>
            </div>

<input class="btn btn-primary" type="submit" value="Envoyer">

<div class="mb-3">
      <input type="checkbox" id="actif" name="actif" checked>
      <label for="actif">utilisateur actif ???</label>
    </div>
  
</div>


</form>
    
<div>
<!-- //pré remplir le champ de création à aujourd'hui  -->
<!-- document.query("#dt_creation").value = "2023-02-08" -->

</div>

</body>
</html>

