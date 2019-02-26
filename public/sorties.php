<?php

echo "Hello world.<br>\n";
echo "Hello world.<br>\n", "Goodbye world.<br>";

print "Hello world.<br>";

var_dump( ['hello', 'world'] );

print_r( ['hello', 'world'] );

var_dump( false );
print_r( false );

echo "---";


$str_h1 = "PHP";
echo "<h1>Sorties $str_h1</h1>";
?>

<h1>Sorties <?php echo $str_h1; ?></h1>
<h1>Sorties <?= $str_h1; ?></h1>