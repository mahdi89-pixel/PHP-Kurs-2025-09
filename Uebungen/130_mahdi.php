<?php

/*
 * Merkbares Zufallspasswort
 *
 * Für eine Webseite muss ein Passwort erzeugt werden.
 * Du hast gemerkt, dass eine zufällige Folge von Buchstaben,
 * Ziffern und Sonderzeichen leicht zu programmieren,
 * jedoch schlecht zu merken ist.
 *
 * Nun mache folgende Vorgaben an ein automatisch generiertes Passwort.
 * Das Passwort muss insgesamt mindestens sechs, maximal zehn Zeichen enthalten.
 * Das Passwort besteht aus einem "Wort",
 * gefolgt von genau einem Sonderzeichen und danach aus einer Zahl.
 * Das "Wort" hat vier, fünf oder sechs Buchstaben,
 * wobei nur der erste ein Großbuchstabe sein darf.
 * Die Zahl hat eine, zwei oder drei Stellen.
 * Im "Wort" wechseln Konsonanten mit Vokalen immer ab.
 * Verwechselbare Zeichen sollen nicht vorkommen.
 *
 * Schreibe ein Programm, das ein "merkbares" Zufallspasswort ausgibt.
 */

$vowels = ['a','e','u'];
$consonants = ['b','c','d','f','g','h','j','k','m','n','p','q','r','s','t','v','w','x','y','z'];
$specials = ['@','#','$','%','&','?','+','-','_','=','!'];

$wordLen = random_int(4,6);
$word = '';
$isConsonantTurn = true;

for ($i=0; $i<$wordLen; $i++) {
    if ($isConsonantTurn) {
        $ch = $consonants[random_int(0,count($consonants)-1)];
    } else {
        $ch = $vowels[random_int(0,count($vowels)-1)];
    }
    $word .= $i===0 ? strtoupper($ch) : strtolower($ch);
    $isConsonantTurn = !$isConsonantTurn;
}

$special = $specials[random_int(0,count($specials)-1)];
$digits = ['2','3','4','5','6','7','8','9'];
$numLen = random_int(1,3);
$number = '';

for ($i=0; $i<$numLen; $i++) {
    $number .= $digits[random_int(0,count($digits)-1)];
}

$password = $word.$special.$number;
echo $password, PHP_EOL;


