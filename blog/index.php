<?php

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

// A FAIRE  mettre le lien bbostrap
</head>

<nav class="navbar navbar-nav">
<ul>
    <li class="nav-item">
    <a href="http://localhost/php-inition/blog/index.php?page=index.php"
    class="nav-link">Accueil</a>
    </li>

    <li class="nav-item">
    <a href="http://localhost/php-inition/blog/index.php?page=contact.php"
    class="nav-link">Contact</a>
    </li>

    <li class="nav-item">
    <a href="http://localhost/php-inition/blog/index.php?page=login"
    class="nav-link">Connexion</a>
    </li>

   <div class="container">
   <?php if(empty($_GET)) : ?>
   <!-- page d'accueil -->
   <?php require "vue/accueil.php" ?>
   <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "article") : ?>

    <!-- page de article -->
    <?php require "vue/" ?>
    <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "contact") : ?>
        <?php require "vue/article.php" ?>

        <!-- page de contact -->
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "login") : ?>
            <!-- page login -->
            <?php require "vue/login.php" ?>
            <?php else : ?>

                <!-- page 404 -->
                <?php require "vue/404.php" ?>
                <?php endif ?>

   </div>
</ul>


</nav>
<body>


    
</body>
</html>