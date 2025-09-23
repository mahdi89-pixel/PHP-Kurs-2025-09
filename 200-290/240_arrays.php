<?php

//arrays


// Nummerisches Array (in Python die Liste)

$leute =['Peter', 'Paul', 'Mary'];

//echo $leute; //Array & Warning

//Zur Information beim Programmieren:
var_dump($leute);

echo $leute[0]. "\n";
echo $leute[1]. "\n";
echo $leute[2]. "\n";

//Assoziative Array(in Python das Dictionary)

$person =[
    'vorname' => 'Peter',
    'nachname' => 'Weller',
    'alter' => 39
];

var_dump($person);

echo $person['vorname']. "\n";
echo $person['nachname']. "\n";
echo $person['alter']. "\n";

//count()
//gibt die Anzahl der Indexe/Keys zurück.
echo count($leute) . "\n"; //3
echo count($person) . "\n";//3

//foreach-schleife (speziell für Arrays)

foreach ($leute as $leut){
    echo 'hallo'. ' ' . $leut . "\n";
}


foreach ($person as $s => $w){ //$s für Schlüssel, $w für Wert
    echo $s . ': ' . $w . "\n";
}
// Doppelpfeil beim nummerischen Array
$menschen = ['Peter', 'Paul', 'Mary'];

//kann beim Auslesen verwendet werden
foreach ($menschen as $k => $v){
    echo ($k+1) . '. ' . $v. "\n";
}

for ($i = 0; $i < count($menschen); $i++){
    echo ($i + 1) . '. ' . $menschen[$i] . "\n";
}

