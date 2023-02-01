<?php

$serveur = [
    "source" => "c:\\",
    "langage" => "HTML",
    "protocole" => "http",
    "host" => "localhost",
    "fichier" => "index.php"
];

$adresse = "{$serveur["protocole"]}://{$serveur["host"]}";
//xampp lance un serveur qui ecoute l'adresse http://localhost

echo <p>XAMPP lance un serveur qui écoute l'adresse {$adresse};

