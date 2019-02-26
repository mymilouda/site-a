<?php

$phpIsBorn = 1995;

$MIT_Students = ['Andi Gutmans', 'Zeev Suraski'];

echo "Rasmus LERDORF est le créateur de PHP.<br>\n";
echo "A l'origine PHP veut dire Personnal Home Page.<br>\n";
echo "PHP a vu le jour en ".$phpIsBorn.".<br>";
echo "Quelques années après, ".$MIT_Students[1]." et ".$MIT_Students[0]." reprennent le projet PHP<br>";

$a = substr($MIT_Students[1], 0, 2);
$b = substr($MIT_Students[0], 1, 2);

echo "Ensemble ils créent la Société ".$a.$b."<br><br>";


// -- Remplacer une chaine de caractères
$original_str = "J'aime les chats !";

// Méthode 1
echo str_replace("chat", "chien", $original_str)."<br>";

// Méthode 2
echo preg_replace("/chat/", "chien", $original_str)."<br>";

// Méthode 3
echo substr_replace($original_str, "chien", 11)."<br>";

// Méthode 4
$exp_str = explode(" ", $original_str);
$exp_str[2] = "chiens";
echo join(" ",$exp_str);

echo "<br>";
echo "Nombre de caractères : ". strlen($original_str) ."<br>";
echo "Le tableau \$MIT_Students possède ". count($MIT_Students) ." entrées.<br>";
echo count($original_str) ."<br>";