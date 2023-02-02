
<!--
    créer le fichier 09-exo.php
    variable qui est tableau multi dimensionnel qui s'appelle
    villes 
    [ nom  Paris , nbHabitant 3_000_000]
    [ nom  Marseille , nbHabitant 800_000]
    [ nom  Lille , nbHabitant 232_000]
    [ nom  Lyon , nbHabitant 513_000]
    http://localhost/php-initiation/jour4/09-exo.php afficher toutes les villes
    http://localhost/php-initiation/jour4/09-exo.php?nom=Paris afficher uniquement Paris
    http://localhost/php-initiation/jour4/09-exo.php?nom=Grenoble aucun resultat
    => vous devez mettre en forme le resultat via une page html et la librairie bootstrap
-->

//http://localhost/php-initiation/jour4/09-exo.php

$ville = [
    [ "nom" => "Paris" ,
     "nbHabitant" => 3_000_000],
    [ nom => Marseille ,
     "nbHabitant" => 800_000],
    [ "nom" => Lille ,
     "nbHabitant" => 232_000],
    [ "nom" => Lyon , 
    "nbHabitant"  => 513_000]
 
    ];

    if(!empty($_GET)){
    $ville = $_GET["nom"];
    <!-- $max = $_GET["max"]; -->
    $produitsFiltre = [];
    foreach($produits as $v){
        if($ville == $v[""] {
            array_push($villeFiltre, $v);
        }
    }
    $ville = $villeFiltre ;
}
var_dump($ville);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <section class="row">
            <!--  3 cas 
               
            toutes les villes
            paris
            Grenoble
            
            http://localhost/php-initiation/jour4/08-exo.php
            --> 
            <?php if $ville() = "Paris" : ?>
               
                <?php foreach($ville as $v) : ?>
                    <p>ville : <?php echo $p["nom"] ?></p>
                    
                    <hr>
                <?php endforeach ?>
            <?php elseif($ville) === "Paris" : ?>
                <h1>un seul produit</h1>
                <p>nom : <?php echo $produits[0]["nom"] ?></p>
                <p>prix : <?php echo $produits[0]["prix"] ?></p>
            <?php else : ?>
                <h1>aucun produit</h1>
            <?php endif ?>
        </section>
    </div>
</body>
</html>