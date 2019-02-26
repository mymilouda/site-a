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


// 2. Connexion à la base de données
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

// 3. Une requete

// Query Ingredients
$q_ingredients = "SELECT * FROM ingredients";

// Results Ingredients
$r_ingredients = mysqli_query($db, $q_ingredients);
var_dump( $r_ingredients );

// 4. Traitement du resultat

// Data Ingredients
// Liste des données sous forme de tableau Numérique
// $d_ingredients = mysqli_fetch_all($r_ingredients,);

// Liste des données sous forme de tableau Associatif
$d_ingredients = mysqli_fetch_all($r_ingredients, MYSQLI_ASSOC);
// print_r( $d_ingredients );
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

        <?php foreach($d_ingredients as $key => $line): ?>
        <tr>
            <td><?= $line['id'] ?></td>
            <td><?= utf8_encode($line['name']) ?></td>
            <td><?= $line['vegan_compliance'] ?></td>
            <td><?= $line['halal_compliance'] ?></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<?php
// 5. Nettoygae du resultat de la requete
mysqli_free_result($r_ingredients);

// 6. Fermeture de la connexion
mysqli_close($db);