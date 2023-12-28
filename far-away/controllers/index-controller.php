<?php
require_once "../connection.php";

try {
    // connection a la base de donnée
    $bdd = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(ser)


} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}