<?php 

// http://localhost/php-initiation/jour9/03-exo-suite.php

 class Article
 {
    public string $titre ;
    public string $contenu ;
    public string $dt_creation ; 

    public function  __construct( string $titre_p, string $contenu_p , string $dt_creation)
    {
         $this->titre = $titre_p;
         $this->contenu = $contenu_p;
         $this->dt_creation = $dt_creation_p ;
    }

    public function genererHTML() : string
    {
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
    public function __construct(string $titre_p , string $contenu_p , string $dt_creation_p)
    {
        parent::__construct("Article technique" , "lorem ipsum", "d/m/y");
    }
        
}

$a = new ArticleTechnique();
echo $a->genererHTML();

