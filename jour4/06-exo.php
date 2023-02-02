<?php
$etudiant = [
[
  "prenom" => "Alain",
  "age" => "18",
],
[
    "prenom" => "Benoit",
    "age" => "25",
  ],
  [
    "prenom" => "Céline",
    "age" => "12",
  ],
  [
    "prenom" => "Denis",
    "age" => "40",
  ],
];

http://localhost/php-initiation/jour4/06-exo.php

if(!empty($_GET)){
    //detecte si il y a la partie dans l'url
    $age = $_GET["age"];//récupérer  le chiffre de l'url
    $etudiantFiltre = []; // je crée une variable qui est un tableau vide
    foreach($etudiantFiltre as $e){//parcourir le tableau multidimentionnel $etudiant
        if($age <= $e["age"]){//est ce que l'élément $d["id] === id dans l'url
            array_push($etudiantFiltre, $e);//ajouter un élément à un tableau vide
        }
    }

    $etudiant = $etudiantFiltre ;    //remplacer le tableau multidimentionnel par le rempli
}
var_dump($etudiant);

//http://localhost/php-initiation/jour4/05-exo.php

// if(count($etudiant) === 1){
//     echo "<h1>une fleur</h1>";
//     }elseif(count($etudiant) > 1){
//         echo "<h1>toutes les fleurs</h1>";
//     }else {
//         echo "<h1> aucune fleurs</h1>";
    // var_dump($etudiant);