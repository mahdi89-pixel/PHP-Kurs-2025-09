<?php

// PDO - PHP Data Objects

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', "");
var_dump($db);  // CLASS pdo#1 (0) {}

// new erzeugt ein neues Objekt der Klasse PDO.

//wie in Java/Python auch, wird in PHP eine Klasse mit dem Schlüsselwort class definiert.
// und ein neues Objekt der Klasse mit dem Schlüsselwort new erzeugt.

class Fahrzeug {}
$fahr1 = new Fahrzeug();
var_dump($fahr1);  // class Fahrzeug#2 (0) {}