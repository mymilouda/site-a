<?php
$tse_start = microtime(true);
$tse_end = $tse_start;
?>


<h3>TimeStamp</h3>
<p>
    Nombre de secondes écoulées depuis le 1er Janvier 1970 à 00h00m00s : <br>
    <?= time() ?> <br>
    <?= microtime() ?> <br>
    <?= microtime(true) ?>
</p>


<h3>Mise en pause du script</h3>
<div>1</div>
<div>2</div>
<?php /*sleep(3)*/ ?>
<div>3</div>
<div>4</div>
<div>5</div>

<h3>Calcul du temps de chargement de la page</h3>
<?php
$tse_end = microtime(true);
echo $tse_end - $tse_start;
?>

<h3>Calendrier</h3>
Nom du jour : <?= date('D') ?><br>
Nom du jour : <?= date('l') ?><br>
Numero du jour (mois) : <?= date('j') ?><br>
Numero du jour (mois) : <?= date('d') ?><br>
Numero du jour (semaine) : <?= date('N') ?><br>
Numero du jour (semaine) : <?= date('w') ?><br>
Numero du jour (année) : <?= date('z') ?><br>
Numero du mois : <?= date('n') ?><br>
Numero du mois : <?= date('m') ?><br>
Nom du mois : <?= date('M') ?><br>
Nom du mois : <?= date('F') ?><br>
Nombre de jour dans mois : <?= date('t') ?><br>
Années bissextile : <?= date('L') ?><br>
Année : <?= date('y') ?><br>
Année : <?= date('Y') ?><br>
Numéro de la semaine : <?= date('W') ?><br>
<br>
Date : <?= date('l d F Y \h\e\u\r\e : H:i:s') ?>








<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>