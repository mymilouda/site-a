<?php

// Déclarer une fonction
function nomDeLaFonction( string $parametre ) : string {
    return "Je m'appel ".$parametre."<br>";
}

// Appel d'une fonction
// echo nomDeLaFonction( "Arthur" );
// echo nomDeLaFonction( 42 );


// Portée d'une variable

$a = 42;

function _A () {
    global $a;
    echo $a;
}

echo $a;
_A();