<input type="text" name="data"><!-- Bonjour -->
<input type="text" name="data"><!-- echo (SELECT * FROM table WHERE 1=1) -->

<input type="url" name="address"> <!-- http:// -->
<input type="text" name="address"> <!-- / -->

<?php

$data = $_POST['data'];
$data = "Bonjour";
$data = "echo (SELECT * FROM table WHERE 1=1)";

$query = "INSER INTO table (`field`) VALUES (\"".$data."\")";
$query = "INSER INTO table (`field`) VALUES (\"Bonjour\")";
$query = "INSER INTO table (`field`) VALUES (\"echo (SELECT * FROM table WHERE 1=1)\")";