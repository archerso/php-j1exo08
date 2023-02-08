<?php

//"http://localhost/php-initiation/blog/traitement/form-contact.php"

session_start();//super GLOBAL comme post ou get DONNER QUE L'ON PEUT PARTAGER 

$erreurs = [];


//si un des deux champ on rajoute une erreur
if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs , "veuillez compléter les deux champs");
}

//est ce que l'email est un email avec une forme valide
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "l'email transmis n'est pas valide");
}

//le champ commentaire doit contenir une forme valide minimum 4 lettre et maximum 1000 lettres
//string et lenth =>strlen
if(strlen($_POST["commentaire"]) <= 4 || strlen($_POST["commentaire"]) > 1000 ){
    array_push($erreurs , "le champ commentaire doit contenir entre 4 et 1000 lettres");
}

$_SESSION["form"] = $_POST ;//permet de retourner les valeur dans le formulaire

if(count($erreurs) === 0){ //afficher un message sous le formulaire
    $_SESSION["message"] = [
        "alert" => "sucess",
        "info" => "merci !!!"
    ];

}else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
header("location: //localhost/php-initiation/bllog/index.php?page=contact");
//rediriger vers le formulaire

exit ;