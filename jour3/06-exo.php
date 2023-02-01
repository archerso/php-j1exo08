<?php
//créer le fichier 06-exo.php

//tableau de tableau
//formation
//[nom : "js" , prix : 2300,20 , sujets : ["install", "navigateur", "formulaire"]]
//[nom : "php" , prix : 750,55 sujets : ["xampp", "apache"] ]

//écrire dans le navigateur

//la formation js coute 2300,2 euros et contient 3 sujets
// la formation php coûte 750,5 et contient 2 sujets

$formation = [
["nom" => "js" ,
 prix => 2300.20 ,
  sujets => ["install", "navigateur", "formulaire"]
],
["nom" => "php" ,
 "prix" => "750.55 euros",
 "sujet" => ["xampp", "apache"]
 ]
];

for($i = 0 ; $i < count($formation) ; $i++){
    $prixFr = number_format($formation[$i]["prix"], 1 , "," "");
    $nbSujet = count($formation[$i]["sujets"]);
    echo "<p>la formation {$formation[$i]["nom"]} coûte {$prixFr} euros et contient {$nbSujet}
    sujets</p>";
}

foreach($formation as $f){
    $prixFr = number_format($f["prix"] , 1 , ",", "");
    $nbSujet = count($f["sujet"]);
    echo "<p>la formation {$formation[$i]["nom"]} coûte {$prixFr} euros et contient {$nbSujet}
    sujets</p>";
}