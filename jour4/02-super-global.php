<?php
//02-super-global.php

// $_Get // $_get => n'existe pas
// $_GET
// $_POST
// $_FILE
// $_COOKIE
// $_SERVER
// $_SESSION
// $_SERVER
// $_SESSION
// $_REQUEST
// $_ENV
// $_GLOBALS


//est utilisable N'IMPORTE OU dans le code
//les super globales ont un scope (portée) super globales
//http://localhost/php-initiation/jour4/02-super-legal.php
//echo $_GET ; // permet de RECUPERER des informations dans l'URL

echo $_GET ;

// function a (){
//     $b = $_GET ;
// }

var_dump($_GET);// []
//http:localhost/php-initiation/jour4/02-super-global.php

var_dump($_GET); //["nom" => "Alain"]
//http:localhost/php-initiation/jour4/02-super-global.php?nom=Alain

var_dump($_GET); // ["nom" => "Alain" , "age" => "20" , "isAdmin" => "false"]

////http://localhost/php-initiation/jour4/02-super-legal.php?nom=Alain&age=200&isAdmin=false

?>

<ul>
    <li><a href="http:localhost/php-initiation/jour4/02-super-global.php">lien 1</a>/li>

    <li> <a href="//http:localhost/php-initiation/jour4/02-super-global.php?nom=Alain">lien2 </a></li>

    <li><a href="http://localhost/php-initiation/jour4/02-super-legal.php?nom=Alain&age=200&isAdmin=false">lien3</a></li>

    <li><a href="http://localhost/php-initiation/jour4/02-super-legal.php?nom=Alain&age=200&isAdmin=false">lien4</a></li>

    <li><a href="http://localhost/php-initiation/jour4/02-super-legal.php?page=1">lien4</a></li>

</ul>



