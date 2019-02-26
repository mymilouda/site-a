<?php

// IF
if (condition) {
    // code à exécuter si "condition" est réalisée
}

// IF ... ELSE
if (condition) {
    // code à exécuter si "condition" est réalisée
} else {
    // code à exécuter si "condition" N'est PAS réalisée
}

// IF ... ELSE IF
if (condition) {
    // code à exécuter si "condition" est réalisée
}
else if (condition_2) {
    // code à exécuter si "condition_2" est réalisée
}

// IF ... ELSE IF ... ELSE
if (condition)  {
    // code à exécuter si "condition" est réalisée
}
else if (condition_2) {
    // code à exécuter si "condition_2" est réalisée
}
else {
    // code à exécuter si "condition" et "condition_2" NE SONT PAS réalisées
}

// SWITCH
switch (condition) {
    case 'A':
        // code à exécuter si "condition" vaut "A"
        break;
    case 'B':
        // code à exécuter si "condition" vaut "B"
        break;
    default: 
        // code à exécuter si "condition" NE vaut NI "A", NI "B"
}

// TERNAIRE
$result = condition ? true : false;
$tKoi = age > 18 ? "un homme" : "un bébé";
