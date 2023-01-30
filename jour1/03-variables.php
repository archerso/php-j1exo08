<?php

// en js pour créer une variables on doit utiliser le mot clé let ou var ou const

// const a = 10
// EN PHP pas de mot clé
// met le symbole $ devant LeNomDeLaVariable
$a = 10 ;

// en js le point virgule final est facultatif 
//EN PHP ; le , est obligatoire
// un seul ; manquant dans la page => STOP erreur fatale

$b=30; // les espaces avant et aprés le symbole d'affectation sont facultatifs

//il existe plus de 5 types de valeur comme en Javascript
//que l'on peut stocker dans une variable

// string => texte

$c = "bonjour les amis" ;
$d = 'comment allez vous ???' ;
// chiffre entier ou a virgules

$e = 200 ; // int
//$f = -500 ;

$g = 1.2 ; // float
$h = -42.51 ;

//boolean

$i TRUE ;
$j = false ;

// 3 type de base variable contient 1 valeur

// dans une variable on peus stocker +sieyrs valeur => type complexe
//tableau
//objet

$k = ["pomme" , "poire", "banane"] ; // tableau simple / tableau indexé(même chose que js)

$si = ["nom"  =>"Alain" , "age" => 20 , "isAdmin" => true] ;

// il est conseillé de faire mettre des sauts de ligne pour chaque valeur d'un tableau associatif (pour le rendre plus lisible)

$1 = [
    "nom = "Alain" ,
    "age" => 20 ,
    "isAdmin" => true
];

//dernier type complexe obet MAIS pour créer un objet en php il faut au préalable commencer par créer ue class

// $m = {a : } ca ne fonctionne pas ...

class M{}D'ABORD CREER une class
$m = new M() ; // l'objet est OBLIGATOIRE issue de M
//class et objet en php font l'objet d'une semaine spéciale tant le sujet contient une grande qte d'information

// https://formation.webdevpro.net/php-initiation/
// login : php
// pasword : initiation

// version 6 javascript
// php 8

// en php 8 

// en php vous avez un fichier php.ini => fichier qui permet de mofdifier comment php fonctionne
//il est posssbile via le fichier php.ini d'ajouter des fonctionnalité en + du langage

// module xdebug => console.log pour javascript