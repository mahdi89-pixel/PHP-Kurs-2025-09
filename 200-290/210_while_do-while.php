<?php

//while

//Kopfgesteuerte Schleife

$i = 1;
while($i <= 10){
    echo $i . ' ';
    $i++;
}
echo '<br>';

// Die Stärke von While:
// Die Anzahl der Durchläufe ist nicht bekannt.
while (rand(1, 6) != 6){
    echo 'Bäh';
}

//do while
//Fußgesteuerte Schleife
//läuft immer mindestens einmal durch.

do{
    $wurf =rand(1, 6);
    echo $wurf .' ';
}while($wurf !=6);

//Python
$wurf = rand(1, 6);
echo $wurf. ' ';
while ($wurf != 6){
    $wurf = rand(1, 6);
    echo $wurf . ' ';
}
