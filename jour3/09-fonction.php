<?php
//récupère un paramètre qui est un tableau et le retourne en chaine de caractère
<?php 
declare(strict_types=1);

function genererArticle (array $article) : string {
    return "
        <article class='card'>
            <h2 class='card-header'>{$article["titre"]}</h2>
            <img src='{$article["img"]}' alt='' >
            <p>{$article["contenu"]}</p>
        </article>
    ";
}



/*image dans gooogle chercher unspsah random dans les resultat choisir generate random image
 + recopier le lien et RAJOUTER TAILLE PHOTO + . jpg //
 //

