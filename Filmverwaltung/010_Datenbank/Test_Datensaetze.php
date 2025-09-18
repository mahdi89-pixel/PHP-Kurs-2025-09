<?php
$db = new PDO('mysql:host=localhost;dbname=filmverwaltung', 'root', "");
$db->query('TRUNCATE TABLE filme;');

$db->query("INSERT INTO filme VALUES (1, 'Equalizer', 2014, 'Action', NULL, 16, 192.3, 132, NULL);");