<?php
include_once "config.php";

// $_SESSION['test'] = "ABC";

// Lorsque l'utilisateur arrive sur la page, il utilise la méthode GET
// Lorsque l'utilisateur envois le formulaire, il reviens sur cette meme page, mais avec la méthode POST

// Définition de la variable $name
$name = null;

// Récupération de la donnée
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
}

include_once "menu.php";

?>

<h1>Fichier A</h1>

<form method="POST">
    <input type="text" name="name">
    <button type="submit">Valider</button>
</form>

<?php if (!empty($name)): ?>
<div>
    Bonjour <?= $name ?>
</div>
<?php endif; ?>

<?= $_SESSION['test'] ?>

























<?php 
// Controle de la donnée, puis affichage

// By Laura
// --
// if (!empty($_POST['name'])) {
//     echo "<div>Bonjour ".$_POST['name']."</div>";
// }

// By Joelle
// --
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = isset($_POST['name']) ? $_POST['name'] : null;
//     echo "<div>Bonjour ".$name."</div>";
// }

// By Greg
// --
// $name = $_POST['name'];
// $result = isset($_POST['name']) ? "<div>Bonjour ".$_POST['name']."</div>" : null;
// echo $result 
?>