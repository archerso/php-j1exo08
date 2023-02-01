<?php
//tableau qui continet des objets en js collection
//tableau indexé qui contiennent des tableaux associatifs
//tableau multi dimensions
// http://localhost/php-initiation/jour3/03-tableau-suite.php
$etudiants = [
    [
    "nom" => "Alain",
    "Age" => "22",
    "competences" => ["js", "css"]
],
[
    "nom" => "Céline",
    "Age" => "12",
    "competences" => ["php", "sql"]
]
];

//alain maitrise le css
//$etudiant[0] ["nom"]
//$etudiant[0] ["competences"][1]

echo "<p>{$etudiants[0]["nom"]} maîtrise le {$etudiants[0]["competences"][1]}</p>";
// echo "<p>" . $etudiants[0]["nom"] . " maîtrise le " . $etudiants[0]["competences"][1] . "</p>";


//ecrire dans le navigateur le texte suivant
//céline a 12 ans maîtrise le php
echo " <p>{$etudiants[1]["nom"]} qui a {$etudiants[1]["Age"]} maîtrise le {$etudiants[1]["competences"][0]}</p>";

echo " <p>" . $etudiants[1]["nom"] . "qui a" .$etudiants[1]["Age"] . "maîtrise le". $etudiants[1]["competences"][0]. "</p>";


//écrire les deux phrases suivantes (utiliser les boucles)

//Alain débute sur css et maîtrise ja


foreach($etudiants as $etudiant){
    echo "<p>{$etudiant["nom"]} débute sur {$etudiant[0][competences][1]} et maîtrise {$etudiants[0][competences][0]}</p>";
}

//Céline débute sur sql et maîtrise php
echo "<p>{$etudiant["nom"]} débute sur {$etudiant["competences"][1]} et maîtrise {$etudiants[competences][0]}</p>";

//créer 04-exo.php
//créer une variable s'appelle villes qui est de type tableau indexé
//ce tableau contient 2 tableaux associatifs
// [
//     nom Paris
//     nbHabitant : 5_000_000
//     arrondissements 15
//     monuments ["vieux port" , "velodrome"]
// ]
// écrire dans le navigateur les phrases suivantes




