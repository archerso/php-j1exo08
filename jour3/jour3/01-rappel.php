<?php

//condition
//très proche de javascript

$a = 45 ;

if($a < 10){

}elseif($a < 50){// la seule différence est l'absence d'espace entre else et if

}else {
    # code...
}

//fonction
//créer des fonctions
function b (){
    //stocker des instructions
}

//éxécuter les instructions stockées
b();

//paramètre dans les fonctions et le typage (facultatif)
function c (float $largeur , bool $test){

}
//retourner une valeur qui peu être typé(facultatif)

function d () : array {
    return 10;
}//il ne faut pas confondre return et echo/var_dump

//éviter les actions invisibles de php
declare(strict_types=1); 
//ajouter cette ligne pour le typage
//*soit //strictement APPLIQUEE "23" = 23

//la différence entre var_dump() et echo
echo "<p>écrire dans le navigateur</p>" ; // echo */- document.querySelector().innerHTML

var_dump($a); //écrire dans le navigateur valeur * type == console.log

//comment utiliser des tableaux

//tableau indexé
$etudiant = ["Pierre", "Paul" , "Jacques", "Céline"];
echo {"$etudiant[3]} a decouvert le php";

//tableau associatif
$maison = [
    "adresse" => "75 rue de Lille",
    "enTravaux" => false,
    "Prix" => 100_000
];

//la maison a couté 100_000 euros
echo "la maison a couté {$maison["prix"]} euros <br>";

//http://localhost/php-initiation/jour3/01-rappel.php
//c:\xampp => xampp-control.exe