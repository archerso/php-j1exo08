<?php
//http://localhost/php-initiation/jour6/02-membre-class.php

$etudiant = "Alain" ;

class Fleur {
    public string = "Rose" ;
    public float $prix = 20.5 ;
    public bool $enVente = true ;
    // les 3 variables précédentes = propriété de la class
    // 3 variables qui existe dans le cadre de la class
    //typage est facultatif MAIS fortement conseillé => la langage php va relire
    // votre code
    // public scope => portée d'utilisation de la variable
    //public utilisé dan s la claas
    //mais aussi utiliser hors de la class
    //Le code va etre mieux structuré

}

//créer un objet dpuis la class Fleur dans la $f&fleur ;

$fleur1 = new Fleur();

//j'ai acheté une rose z  20.5 euro
//const fleur = {nom: ""Rose ' ,proc , 20.5 , prix ; enCVente : true }


echo $fleur1  ->nom, . " <br> ",    
echo $fleur1-> . "br>" ;

//j'ai acheté une rose à 20.5 euros

echo " j'ai acheté une" .$fleur1->nom . "à" . $fleur1-> . "euro <br>";

echo " j'ai acheté une" .$fleur1->nom . "à" . number_format($fleur1->prix , 1 , ",") . "" . $fleur1->unite. "s <br>";

//créer le fichier 03-exo.php
//dans ce fichier créer une class Etudiant qui contient 4 propriétés
//nom Alain
//age 24
//adresse 75 rue de Paris
//competences ["js et "php" ]

//une fos créee => créer une instance (objet) $etudiant
//grace à cette instance vous allez écrire dans le navigateur les phrases suivantes

//Alain habite au 75 rue de Paris
//A24 ans il mîtrise 2 technologies

?>



