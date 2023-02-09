<?php 

// http://localhost/php-initiation/jour9/03-exo.php

 class Article
 {
    public string $titre ;
    public string $contenu ;
    public string $dt_creation ; 

  

    public function genererHTML(){
        return "
        <article>
       <h2>{$this->titre}</h2>
       <p>{$this->titre}</p>
       <p>date de creation {$this->dt_creation}</p>
       </article>
        " ;
    }
}

class ArticleTechnique extends Article
{
    public string $titre = "Article technique";
    public string $contenu = "lorem ipsum";
    public string $dt_creation = "09/02/2023";
    // public string $dt_creation = date("d/m/Y"); // erreur

}

$article = new ArticleTechnique();
echo $article->genererHTML();

//créer le fichier 04-exo.php
//ce fichier contient plusieurs class

//première class form
//propriété public nbCote
//propriété couleur

//méthode public surface contient aucun traitement et aucun parametre

//class Rectangle hérite de forme
//initialiser la valeur de nbCoté => 4
//initialiser la valeur de couleur =>blue

//modofier la méthode => surface => retourner la valeur 10

//éxécuter la class Rectangle et utilisez la méthode surface
