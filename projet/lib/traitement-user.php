<?php

session_start();
$erreurs = [];

require "base de donnee.php";

if(
    empty($_POST["nom"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"]) ||
){
    array_push($erreurs , "veuillez compléter les champs");
}

if (empty($_POST["nom"]) ||
empty($post["email"])
){
    array_push($erreurs, "Veuillez compléter les champs");
}

if(empty["password"] && !isset($_POST["id"])) {
    //ISSET permet de vérifier S4IL Y A UNE ANCIENNE VALEUR ET DE L'AFFICHER
    
}
if(strlen($_POST["nom"]) >= 4 && strlen(($_POST["nom"] >=255))){
    array_push($erreurs , "le champ nom doit contenir entre 4 et 255 lettres");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "l'email n'est pas conforme");
}

//autre test => il ne faut pas qu'il ya ait 2 utilisateurs avec le m^me email
$sth = $connexion->prepare("SELECT * FROM users WHERE email = :email");
$sth->execute(["email" => $_POST["email"]]);
$resultat $sth->fetchall();

if(!empty($resultat)){
    array_push($erreurs , "il existe déja un profil avec cet email");
}

if(isset($_POST["actif"])){
    $_POST["actif"]
}
if !filter_var($e)

//traitements
$_SESSION["form"] = $_POST ;

if(count($erreurs) ===0){
$_SESSION["form"] = [];
//ajouter le profil en base de données

$sth = $connexion->prepare("
INSERT INTO users
(nom, email, password, dt_creation, status)
VALUES
(:nom , :email , MD5(:password) , NOW() , actif)

");
//MD5() fonction de hashage de MySQL => permet de hasher le mot de passe dans la base 
//ET la fonction ne dispose pas de fonction inverse
$sth->execute($_POST);

header("location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee");
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee&action=add");
} 