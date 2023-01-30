<?php

//07-traitement-string.php

//concaténation = addition plusieurs textes

$prenom = "Alain" ;
$nom = "DOE" ;

//Alain DOE découvre le php
$phrase = "$prenom $nom découvre le php" ; // concaténation "  " dans les guillemets directement les variables
                                            // j'ai écris les variables
echo $phrase ;                              // écrire dans la page html

// http://localhost/php-initiation/jour1/07-traitement-string.php
$phrase2 = "{$prenom} {$nom} découvre le php" ;// concaténation ""  dans les guillemets
                                                //$variables entouré de {}

echo $phrase2 ;

//utilisation de l'opérateur
$phrase3 = $prenom. "" . $nom. "découvre le php <br>" ;
echo $phrase3 ;

// écrire avec php la phrase suivante
//Victor hugo a dit "Vive les misérables"
//caractère d'échappement

$parole= "Victor Hugo a dit \"Vive les Misérables\"" ;
//utilisation du symbole anti slash devant les guillemets à interpréter comme des guillemet à interpréter comme des guillemet et non comme la fin d'une string

echo $parole ;

//autre mnanière de faire des sauts de ligne

$unTexte = "<div>bonjour , comment allez vous $prenom ?>/div>";

echo $unTexte;
$phraseMultiligne = "hello les amis" ;
/*comment allez vous*/

/*j'espère bien !;

// avec les guillemets double => possible de sauter les lignes dans la valeur de la variables

echo $phraseMultiligne ;

//exo créer le 08-exo.php
dans ce fichier créer 3 variables
//prenom Victor
//nom Hugo
//ville Paris

//les phrases suivantes
//Victor Hugo a vécu à paris en 1800.
//Victor a quité Paris à la fin de sa carrière
//Victor Hugo a écrit "Notre Dame de paris"

// afficher ces 3 phrases dans le navigateur*/