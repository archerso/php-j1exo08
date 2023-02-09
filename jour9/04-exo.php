<?php
//http://localhost/php-initiation/jour9/04-exo.php

//  class <form 
//  {
// public int $nbCote ;
// public string $couleur ;

// public function surface(){}

// }
 
abstract class form {
public int $nbCote ;
public string $couleur ;

abstract public function surface();

}

//étant donné que dans la class form créer une méthode abstraite

//Toutes les class qui hérite de la class Form doivent OBLIGATOIREMENT contenir la méthode abstraite

class Rectangle extends Form{
    public int $nbCote = 4 ;
    public string $couleur = "blue" ;
    public function surface(){
        return $this->nbCote ;
    }

}
$r = new Rectangle ();
echo $r->surface() . "<br>";