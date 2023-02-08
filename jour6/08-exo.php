<?php
class Formation {
    public string $nom = "devops";
    public int $duree = 5 ;
    public int $prix = 5000 ;
    public array $matieres= ["linux", "php", "html", "css"]
}
//retourner le textesuivant "la formulation devOps coute 5000 euros"
public function devis() : string {
    return "la formation {$this->nom} coute" . number_format($this->,0 ",", ""). euros;
}

public function programme() : string {
    //le texte suivant "il y a 4 sujet abordés durant 5 semaines"
    return "il y a " . count($this->matières). "sujet abordés durant les"
}
public function sommaire() : string {}
    //fonction => méthode de class 
    http://localhost/php-initiation/jour6/08-exo.php
        return "la formation devOps coute 5000 euros";
  
    
}
//créer le fichier 08-exo.php
//créer une class Formation
//plusieurs propriétés
//nom "devOps"
//durée 5
//prix 5000
//matière linux php html css

//cette class dispose de 3 méthodes
//devis


//programme
//retourner le texte suivant "il y a 4 sujet abordés durant 5 semaines"

//sommaire :
//retourne le texte suivant : 
//vous allez étudiant linux, php, html et css