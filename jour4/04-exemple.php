<?php

$data = [
    ["id" => "1", "texte" => "je suis l'article 1"],
    ["id" => "2", "texte" => "je suis l'article 2"],
    ["id" => "3", "texte" => "je suis l'article 3"],
];

//si exécute le fichier php
//http://localhost/php-initiation/jour4/04-exemple.php

//j'affiche le tableau en intégralité

//http://localhost/php-initiation/jour4/04-exemple.php?id=1

if(!empty($_GET)){
    //detecte si il y a la partie dans l'url
    $id = $_GET["id"];//récupérer  le chiffre de l'url
    $recherche = []; // je crée une variable qui est un tableau vide
    foreach($data as $d){//parcourir le tableau multidimentionnel $data
        if($d["id"] === $id){//est ce que l'élément $d["id] === id dans l'url
            array_push($recherche, $d);//ajouter un élément à un tableau vide
        }
    }

    $data = $recherche ;    //remplacer le tableau multidimentionnel par le rempli
}

// $data = [["id" => "1" , "texte" => je suis l'article 1]]
var_dump($data);

//affichage

if(count($data) === 1){
    echo "<h1>page article</h1>";
    var_dump($data);
}elseif(count($data)) > 1 {
    echo "<h1>page article</h1>";
    var_dump($data);
}else{
    echo "<h1>erreur 404</h1>";
    var_dump($data);
}

//créer le fichier 05-exo.php
//créer une variable $fleur tableau multidimentionnel
//[nom rose, prix 200, origin : France]
//[nom jasmin, prix 300, origin : Tunisie]
//[nom muguet, prix 150, origin : Allemagne]

//si vous éxecuter le fichier 05-exo.php => afficher à l'écran toutes les 
//si vous éxecuter le fichier 05-exo.php?nom=rose => afficher à l'écran la rose
//si vous éxecuter le fichier 05-exo.php?nom=jasmin => afficher à l'écran le jasmin
//si vous éxecuter le fichier 05-exo.php?nom=rmuguet => afficher à l'écran muguet
//si vous éxecuter le fichier 05-exo.php?blabla => afficher une page d'erreur 404
