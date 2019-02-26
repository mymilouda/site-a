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
$db_schema = "webpizza";

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

// Définition du Charset
$db->exec("set names utf8");

// 3. Une requete

// Définition de la requete
$q_str_ingredients = "SELECT * FROM ingredients";

// Stockage de la requete dans la mémoire de PDO
$q_ingredients = $db->query($q_str_ingredients);
// var_dump($q_ingredients);

// Execution de la requete
$r_ingredients = $q_ingredients->fetchAll();
// var_dump($r_ingredients);

?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Vegan ?</th>
            <th>Halal ?</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($r_ingredients as $key => $line): ?>
        <tr>
            <td><?= $line['id'] ?></td>
            <td><?= $line['name'] ?></td>
            <td><?= $line['vegan_compliance'] ?></td>
            <td><?= $line['halal_compliance'] ?></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<?php
// Fermeture de la connexion PDO
$db = null;
