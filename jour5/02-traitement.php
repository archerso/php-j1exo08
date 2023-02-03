<?php 
session_start();

$erreurs = [];

if(empty($_POST["email"]) || empty($_POST["langue"])){
    array_push($erreurs , "tous les champs doivent être remplis");
}

if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($_SERVER , "le mail n'est pas valide");
}

$listeLangueValide = ["français" ,"anglais" , "arabe"];
//verifie que la langue fait bien partie du tableau
if(!in_array($_POST["langue"] , $$listeLangueValide)){
    array_push($erreurs , "la langue de la newsletter et invalide");
}

$_SESSION["form"] = $_POST ;
if(count($erreurs) === 0){
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "merci"
    ];
}
