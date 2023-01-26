<?php

## Comparison Operators / Vergleichsoperatoren ##

// var_dump(); //bir variable ile ilgili bilgileri dökümler

$a = true;
var_dump($a); //bool(true) verir


//operators:
 
/*
==
===
!=
!==
<
>
<=
>=
<=>     -> (spaceship/mekik) 
*/


$a = 5;
$b = 2;

echo "<br>";

var_dump(value: $a < $b); //bool(false) 

echo "<br>";

var_dump(value: $a <=> $b); //int(1) a>b ise 1, a<b ise -1, a=b is 0. 

