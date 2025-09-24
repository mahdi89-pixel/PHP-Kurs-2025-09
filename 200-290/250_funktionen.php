<?php
//Funktionen

//Funktionsdefinition mit Parametern
function addiere($zahl1, $zahl2){
    return $zahl1 + $zahl2;
}

//Funktionsaufruf
echo addiere(4, 7); // 11
echo "\n";

// Standard/Default-Werte festlegen
function addiere2($zahl1 , $zahl2 = 1){
    return $zahl1 + $zahl2;
}

echo addiere2(4, 7); // 11
echo "\n";
echo addiere2(4);         // 5


// Prüfungshumor
// Hier ist alles normal.
// beim Funktionsaufruf wird der Wert aus dem Argument ($meineZahl) in den Parameter ($zahl) KOPIERT.
function tueWas($zahl){
$zahl *= 7;
}

$meineZahl = 4;
tueWas($meineZahl);

echo $meineZahl;  // 4