<?php

// Variablenbezeichner

// Am Anfang muss in PHP das Dollar-Zeichen stehen.

// Danach sind Buchstaben, Ziffer und der Unterstrich erlaubt.
// Einschränkung: Direkt nach dem Dollar-Zeichen keine Ziffer.

$_hallo = 1;
$lowerCamelCase = 2; // Programming-Richtlinie
$HELLO = 3; // Funktioniert

// PHP ist (wie alle Programmiersprachen ) case-sensitive
//echo $hello; //warning: undefined variable $hello

// Geht nicht:

// Ziffer darf nicht am Anfang stehen:
 //$1zahl = 11; // Parse: syntax error, unexpected integer "1"

// Keine unerlaubten Sonderzeichen:
//$meine-variable = 12; // Parse error: syntax error ...
