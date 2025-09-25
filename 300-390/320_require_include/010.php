<?php

// require_once bindet eine Datei einmalig ein.

require_once'hello.php';
require_once'hello.php'; // diese Zeile macht nichts, da 'hello.php' schon eingebunden ist.


// require bindet eine Datei jedes Mal neu ein.
require'hello.php';
require'hello.php';
require'hello.php';


// Bei require/require_once wird das Skript abgebrochen,
//wenn die einzubindende Datei nicht gefunden wird.
# require 'hello_world.php';

//bei include/include_once gibt es eine Warnung und das Skript wird weiter ausgeführt.
// Daher bindet man wichtige Sachen( z.B. DB-Verbindung) mit require ein
// und unwichtige sachen (Layout-Element) mit include ein

echo 'Weiter geht es!';
echo '<hr>';

// Die Endung ist frei wählbar.
include 'function.inc';

echo addiere(3, 4);

