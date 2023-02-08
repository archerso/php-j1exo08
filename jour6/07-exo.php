<?php
class Cercle {
    public int $rayon= 30 ;
    public float $pi = 3.14 ;

    public function Cercle() : int {
        //(3.14*30) * 2
       //Cercle = 2* pi * r
        //this permet de recupérer la valeur de pi et du rayon
        return ($this->rayon * $this->pi) ** 2 ;
        http://localhost/php-initiation/blog/jour6/07-exo.php
        //pseudo variable
    }
    public function perimetre() :float{
        return 2 * 3.14 * $this->rayon ;
    }
}


$c = new Cercle();
$cercle->
echo $c->rayon(). "<br>";
echo $c->perimetre(). "<br>";

//créer le fichier 08-exo.php
//créer une class Formation
//plusieurs propriétés
//nom "devOps"
//durée 5
//prix 5000
//matière linux php html css

//cette class dispose de 3 méthodes
//devis
//retourner le textesuivant "la formulation devOps coute 5000 euros"

//programme
//retourner le texte suivant "il y a 4 sujet abordés durant 5 semaines"

//sommaire :
//retourne le texte suivant : 
//vous allez étudiant linux, php, html et css