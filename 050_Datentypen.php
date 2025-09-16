<?php

# Datentypen

//Zeichenkette
print gettype('Hello'); //string
print '<br>';

print gettype(12345);//integer
print '<br>';

//Fließkommerzahl
print gettype(123.789); //double
print'<br>';

//Unterstrich als Tausendertrenner
print 123_456.789_333;
print'<br>';

//Wahrheitswert
print gettype(true); //boolean
print'<br>';

//Identisch-operator ===
print 123 == '123'; //1
print'<br>';

var_dump(123 == '123'); //boolean (true)
print'<br>';

var_dump(123 === '123'); //boolean (false)
print'<br>';

