//créer le fichier 03-exo.php
//dans ce fichier créer une class Etudiant qui contient 4 propriétés
//nom Alain
//age 24
//adresse 75 rue de Paris
//competences ["js et "php" ]

//une fois créee => créer une instance (objet) $etudiant
//grace à cette instance vous allez écrire dans le navigateur les phrases suivantes

//Alain habite au 75 rue de Paris
//A 24 ans il mîtrise 2 technologies

<?php
//http://localhost/php-initiation/jour6/03-exo.php

class Etudiant {
    public string $nom ="Alain";
    public int $age = 24 ;
    public string $adresse ="75 rue de paris";
    public array $competence = ["js", "php"];
}
    $etudiant = new Etudiant();
    //Alain habite au 75 rue de Paris
echo $etudiant->nom . "habite au" .$etudiant->adresse . "<br<";
echo "{$etudiant->nom} habite au {etudiant->} <br>";

//A 24 ans il maîtrise 2 technologies
echo "A" . $etudiant->nom . "ans il maîtrise" . count($etudiant->competences) . "technologies <br>";



?>