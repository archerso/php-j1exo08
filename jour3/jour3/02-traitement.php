<?php
//créer un tableau indexé
//nom de la variable tableau
//remplir le texte 7 valeurs
//lundi =>dimanche

$tableau =["lundi",// 0
            "mardi",
            "mercredi",
            "jeudi",
            "vendredi"
            "samedi",
            "dimanche"//6 incli
];

//traitement classique => parcourir le tableau
//utiliser chaque valeur du tableau
//via une boucle

for( $i = 0 ; $i <=6 ; $i++){
    echo "{$tableau[$i]}"<br>;
}

//http://localhost/php-initiation/jour3/02-traitement-tableau.php

for( $i = 0 ; $i < count($chiffre) ; $i++){// count()
    echo "{$tableau[$i]}"<br>;
}

//count() fonction native de php
//mot clé du langage php if for function
//count() manière d'être utilisé => 1 er parametre est un tableau OBLIGATOIREMENT