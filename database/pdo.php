<?php

// 1. Definition des info de BDD

// Nom du serveur de BDD
$db_host = "127.0.0.1"; // ou "localhost"

// Port de bdd
$db_port = "3306";

// Nom d'utilisateur de BDD
$db_user = "root";

// Mot de passe de BDD
$db_pass = "myosw3sql";

// Nom de la base de données
$db_schema = "webpizzza";

// Type de la BDD
$db_type = "mysql";

// 2. Connexion à la base de données
// $db_info = "mysql:host=127.0.0.1;dbname=webpizza";

$db_info = "$db_type:host=$db_host;dbname=$db_schema";
// $db = new PDO($db_info, $db_user, $db_pass);


try {
    $db = new PDO($db_info, $db_user, $db_pass);
} catch (PDOException $e) {
    print "Hop Hop Hop.... Erreur !: " . $e->getMessage() . "<br>";
    echo __FILE__. " à la ligne : " .__LINE__;
    die();
}