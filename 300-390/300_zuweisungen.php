<?php

// Zuweisungen

// Bei der Zuweisung in PHP entsteht eine Kopie.

$x = 'Peter';
$y = '$x';
$y = 'Paul';
echo $x . ' & ' . $y;
echo '<br>';

// Multiple Zuweisung

$zahi1 = $zahl2 = $zahl3 = 0;
echo $zahi1 . $zahl2 . $zahl3; //000
echo '<br>';

//besser so;
$zahi1 = 0;
$zahl2 = 0;
$zahl3 = 0;
echo $zahi1 . $zahl2 . $zahl3; //000