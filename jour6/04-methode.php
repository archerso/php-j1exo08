<?php
//http://localhost/php-initiation/jour6/04-methode.php

class Formation {
    //2 propriétés
    public string $nom = "Développeur web";
    public int $duree = 20 ;

    //fonction => méthode de class
    public function presentation( string $sujet ) : string {
        return "je suis une formation sur {$sujet}";
    }
}

//exterieur de la class => hors de la class

$f = new formation();
echo $f->nom . "<br>";//utilisé une propriété hors de la class
echo $f-> presentation("css"). "<br>";//utilisé une propriété hors de la class
echo $f->presentation("php poo") . "<br>";

//crée fichier 05-exo.php
//dans ce fichier vous allez créer une class exo
//contient 1 propriété note qui est un chiffre entier qui vaut 20


//contient 2 méthodes
//enonce fonction ne dispose d'aucun paramètre et retourne du texte
//veuillez réalisé l'exercice suivant


//conseil fonction qui dispose d'un paramètre boolean et retourne du texte
//si le boolean est true alors la fonction retour "voici une vidéo à regarder"
//si le boulean est false alors la fonction retour aucune astuce pour cet exo

//éxécuter les deux méthodes de class Exo et afficher les résultats dans le navigateur