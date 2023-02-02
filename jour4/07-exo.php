<?php
$produits = [
["nom" => "Playstation",
  "prix" => "300.5",
  
],
["nom" => "Nintendo DS",
  "prix" => "200",
   
],
["nom" => "Xbox",
  "prix" => "320",
   
]
];
<?php 
// http://localhost/php-initiation/jour4/07-exo.php
$produits = [
 [ "nom" => "Playstation" , "prix" => 300.5 ],
 [ "nom" => "Nintendo DS" , "prix" => 200 ],
 [ "nom" => "Xbox" , "prix" => 320 ]
];

if(!empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];
    $produitsFiltre = [];
    foreach($produits as $p){
        if($min <= $p["prix"] && $max >= $p["prix"]){
            array_push($produitsFiltre, $p);
        }
    }
    $produits = $produitsFiltre ;
}
var_dump($produits);

}
var_dump($produits);

//http://localhost/php-initiation/jour4/07-exo.php
// if("prix" >= 200 && "prix" <= 250){
//     echo "<h1>min 200 euros max 250 </h1>";

//     }elseif("prix" > 0 && "prix" <= 310) {
//         echo "<h1> 0 et 310 max</h1>";
//     }else
//     {
//         echo "<h1> ma console bug</h1>";
//     }var_dump($data);

// if(:empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];
//     $produit
//     }var_dump($data);

    //créer le fichier 07-exo.php 
    // tableau multidimensionnel produits 
    // [ "nom" : Playstation , prix 300.5 ]
    // [ "nom" : Nintendo DS , prix 200 ]
    // [ "nom" : Xbox , prix 320 ]
    
    // si vous exécutez le fichier php sans aucune partie variable => afficher tous les produits 
    // si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=200&max=250
    // [ "nom" : Nintendo DS , prix 200 ]
    // si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=0&max=310
    // [ "nom" : Nintendo DS , prix 200 ] et [ "nom" : Playstation , prix 300.5 ]