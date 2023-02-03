<?php
session_start();

// $_GET  => récupérer des informations dans la barre d'adresse du site
// $_POST => récupérer des informations qui sont saisies dans un formulaire 

// $_SESSION => idéal Panier d'achat / gestion de l'authentification  

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <!-- http://localhost/php-initiation/jour5/02exo.php -->
        <h1>Formulaire Newsletter</h1>
        <form action="02-traitement.php" method="POST">
            <!-- 
            la balise form prend 2 attributs 
            action="02-traitement.php" => à quel fichier, dans le serveur, il faut envoyer les données ??
            method="POST" => comment les informations saisies dans le form vont être envoyées au serveur ?
            -->
            <div class="input-field">
                <input type="email" name="email" id="email">
                <label for="email">votre email</label>
            </div>
            <!-- bouton de soumission -->


            <!-- selection -->
            <div class="input-field col s12">

                <select name="langue" id="langue" >

                    <option value="" disabled selected>francais</option>
                    <option value="français">français</option>
                    <option value="anglais">anglais</option>
                    <option value="arabe">arabe</option>

                    <label for="langue">Choisir sa langue</label>
            </div>
            <div>

                <input type="submit" class="btn lamber darken-2">
            </div>
        </form>


        <?php if (!empty($_SESSION["message"])) : ?>
            <?php if ($_SESSION["message"]["alert"] === "succes") : ?>
                <p class="pink darken-1 white-text" style="padding: 5px">
                    <?php echo $_SESSION["message"]["info"] ?>
                </p>

            <?php elseif ($_SESSION["message"]["alert"] === "danger") : ?>
                <p class="pink darken-1 white-text" style="padding: 5px">
                    <?php foreach ($_SESSION["message"]["info"] as $info) : ?>
                        <?php echo $_info ?> <br>

                    <?php endforeach ?>
                </p>
            <?php endif ?>
        <?php endif ?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
    });


</body>

</html>

<?php var_dump($_SESSION) ?>