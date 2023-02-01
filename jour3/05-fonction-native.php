<?php
//en des mots clés de base de l'information
//if for function ++ = >= ""

//en + de ces mots clés PHP il est livré avec 500 fonctions natives

//dans le langage=> des fonctions qui vont permettre de réaliser des traitements

//count 

$tab = ["a", "b", "c"];

echo count($tab) . "<br>"; // 6 la taille du tableau

// php.net
//count(Countable |array $value, int $mode = COUNT _NORMAL: int)

//5types

//string
//chiffres / int  float
// boolean
//array => count
//objet


//fonction native de php pour manipuler les string
//echo afficher un texte à l'écran

$texte = "bonjour<<br>";
echo ($texte);
echo ($texte);

//explode permet de transformer un string en array
$decription = "2,cm,20mètre";
$rsultat = explode(",",$decription); // ["2", "cm", "20", "mettre"];
var_dump($resultat);
echo $resultat[count($resultat) - 1] . "<br>";//mèttre

//récupérer le nom du fichier éxécuté
$url = "http"//localhost/php-initiation/jour3/05-fonction-native.php
$tabUrl = explode("/", $url);
//["http:","","localhost", "php-initiation", "jour3" "05-fonction-native.php"]
echo $tabUrl[count($tabUrl) - 1] . "<br>"; //05-fonction-native.php
//htmentities
$virus = "<script>window.location.href='https://google.fr'</script>";
echo htmlentities ($virus); //bloque l'execution du html qui contient du js

//number_format _
$prix = 2534.44 ;
//2534,44 
echo number_format($prix) . "<br>";
echo number_format(prix , 2 ) . "<br>";
echo number_format(prix , 2 , "," ) . "<br>";
echo number_format(prix , 2 , "," ) . "<br>";
echo number_format(prix , 2 , "," ""  ) . "<br>";", ,  ) .           

//str_contains
//est ce que contient un texte ???
$titre = "nouvelle article sur le php";
// est ce que dans $titre il y a le mot php

// strlen
$paragraph = "lorem ipsum " ;
echo strlen($paragraph) . "<br>";//11

//substr_replace
//remplacer un texte dans un autre texte

$activité = "j'aime manger des frittes";

//créer le fichier 06-exo.php

//tableau de tableau
//formation
//[nom : "js" , prix : 2300,20 , sujets : ["install", "navigateur", "formulaire"]]
//[nom : "php" , prix : 750,55 sujets : ["xamm", "apache"] ]

//écrire dans le navigateur

//la formation js coute 2300,2 euros et contient 3 sujets
// la formation php coûte 750,5 et contient 2 sujets