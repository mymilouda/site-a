<?php

// Opérateurs d'affectation
// =
$var = "valeur";

// Opérateurs de comparaison
// == Compare les valeurs
$a == $b;

// === Compare les valeurs ET les types
$a === $b;

// ! Différent, retourne l'inverse
!true; // vaut false

// != Différent de..
// Compare les valeurs
$a != $b;

// !== Strictement Différent
// Compare les valeurs et les types
$a !== $b;

// > Supérieur à... 
$a > $b;

// >= Supérieur ou egale...
$a >= $b;

// < Inférieur à ...
$a < $b;

// <= Inférieur ou egale...
$a <= $b;


// Opérateur de concaténation
//  .
$a = "hello ";
$b = "world";

$a.$b; // "hello world"


// Opérateur de tableau
// =>
$monTableau = array(
    "fruit_1" => "pomme",
    "fruit_2" => "poire"
);

// echo $monTableau;
// echo "<br>";
// echo $monTableau['fruit_2'];
// echo "<br>";
// var_dump( $monTableau );
// echo "<br>";


// Opérateur d'objet
// ->
$monObjet = (object) array(
    "fruit_1" => "pomme",
    "fruit_2" => "poire"
);

// var_dump( $monObjet );

// // echo $monObjet;
// echo "<br>";
// echo $monObjet->fruit_2;
// echo "<br>";



// Opérateurs Logique

// ET Logique
// AND, &&
var_dump( true && true );
echo "<br>";
var_dump( true AND true );
echo "<br>";

var_dump( true && false );
echo "<br>";

var_dump( false && false );
echo "<br>";
echo "----";
echo "<br>";

// OU Logique
// OR, ||
var_dump( true || true );
echo "<br>";
var_dump( true OR true );
echo "<br>";

var_dump( true || false );
echo "<br>";

var_dump( false || false );
echo "<br>";
echo "----";
echo "<br>";

// OU Exclusif
// XOR

var_dump( true XOR true );
echo "<br>";

var_dump( true XOR false );
echo "<br>";

var_dump( false XOR false );
echo "<br>";