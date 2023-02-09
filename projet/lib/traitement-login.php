<?php
echo "je suis le traitement pour le formulaire de connexion" ;

session_start();
$erreurs = [];
if(empty($_POST["login"]) || empty($_POST["password"])){


array_push($erreurs, "veuillez remplir les deux champ tableau");

}

$_SESSION["form"]  = $_POST ;

if(count($erreurs) === 0){
    header("location: http://localhost/php-initiation/projet/index.php?page=accueil&partie=privee");
}else
{
$_SESSION["message"] = [
    "alert" => "danger",
    "info" => $erreurs
];
}




//vérifiez que les champs login sont bien remplis => redirection vers la page tableau de bord
//vérifiez que les champs login et password sont bien remplis => sinon afficher un message 
//d'erreur sous le formulaire