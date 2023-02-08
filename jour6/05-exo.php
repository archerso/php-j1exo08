<?php
//http://localhost/php-initiation/jour6/05-methode.php 

class Exo {
    //2 propriétés
      public int $note = 20 ;


      //fonction => méthode de class 
    public function enonce() : string {
        return "jveuillez réalisé c l'exercicice suivant ...";
  
    }

    public function conseil( bool $test ) : string {
       if($test === true){
        return "voici une vidéo à regarder" ;
       }else{
        return"aucune astuce pour cet exo" ;
       }
    }
}

//fonction => méthode de class


$e = new Exo();
echo $e->enonce(). "<br>";
echo $e->conseil(true). "<br>";
echo $e->note
?>