<?php
$data = [
["nom" => "rose",
  "prix" => "200",
   "origin" => "France"
],
["nom" => "jasmin",
  "prix" => "300",
   "origin" => "Tunisie"
],
["nom" => "muguet",
  "prix" => "150",
   "origin" => "Allemagne"
]
];

if(!empty($_GET)){
    //detecte si il y a la partie dans l'url
    $nom = $_GET["nom"];//récupérer  le chiffre de l'url
    $recherche = []; // je crée une variable qui est un tableau vide
    
        if ($d["nom"] === $nom){//est ce que l'élément $d["id] === id dans l'url
            array_push($recherche, $d);//ajouter un élément à un tableau vide
        }
    }

    $data = $recherche ;    //remplacer le tableau multidimentionnel par le rempli
}
var_dump($data);

//http://localhost/php-initiation/jour4/05-exo.php

if("prix" >= 200 && "prix" <= 250){
    echo "<h1>min 200 euros max 250 </h1>";
    }elseif("prix" > 0 && "prix" <= 310) {
        echo "<h1 0 et 310 max</h1>";
    }else {
        echo "<h1> aucune fleurs</h1>";
    }var_dump($data);

    //créer un nouveau fichier 06-exo.php
    //tableau multidimentionnel $etudiants
    //[nom : Alain, Age 18 ]
    //[nom : Benoit, Age 25 ]
    //[nom : Céline, Age 12 ]
    //[nom : Denis, Age 40 ]

    //si vous appellez le fichier 06-exo.php => afficher tout les étudiants
    //si vous appellez le fichier 06-exo.php?age=15 afficher tout les étudiants dont l'age est supérieur à 15
    //si vous appellez le fichier 06-exo.php?age=50 afficher tout les étudiants dont l'age est supérieur à 50