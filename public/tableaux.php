<?php

// Tableau Numérique
$numericalArray = array(
    "pomme", // index : 0
    "poire", // index : 1
    "banane" // index : 2
);
// $numericalArray = array("pomme", "poire", "banane");

// Affiche banane
echo $numericalArray[2];
echo "<br>";

// ---

// Tableau Associatif
$assocArray = array(
    "firstname" => "Bruce",
    "lastname" => "WAYNE"
);

echo $assocArray['firstname'];
echo "<br>";
// echo $assocArray[0]; // NE FONCTIONNE PAS
// echo "<br>";

echo "<br>";
echo "----";
echo "<br>";

echo "<pre>";
print_r($numericalArray);
echo "</pre>";

echo "<pre>";
print_r($assocArray);
echo "</pre>";


function dump( $data ) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

dump( $assocArray );
dump( $numericalArray );
dump( ["Bitcoin", "Litecoin", "Dashcoin"] );

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";