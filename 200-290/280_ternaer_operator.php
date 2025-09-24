<?php

// Ternär Operator

//Bedingung ? True-Fall : False:Fall;

//Operator mit drei (Latein. tres) Operanden.
// Der Operator selber hat die zeichen ? und :
// und drumherum sind die drei Operanden

echo (2 > 1) ? 'stimmt' : 'stimmt nicht';
echo '<hr>';

// Der Ternär Operator ist die Kurzform von einem if else.
if (2 > 1){
    echo 'stimmt';
}
else{
    echo 'stimmt nicht';
}
echo '<hr>';

//Beispiel mit Zuweisung
$ausgabe = (2 > 3) ? 'stimmt' : 'stimmt nicht';
echo $ausgabe;
echo '<hr>';

// Beispiel Plural in der Ausgabe

$anzahl = rand(1,2);
echo ($anzahl == 1) ? 'Mensch' : 'Menschen';
