<?php

## arrays ##

/* tek boyutlu arrayler */

//1.method:
$names1 = array();

//2.method:
$names2 = [];


//die Namen
$names = array('Ben', 'Edward', 'Sarah');

print_r($names);
echo $names[1]; //Edward


//die Lande
$countries = [
    'country1' => 'Germany', 
    'country2' => 'Denmark', 
    'country3' => 'Belgium', 
    'country4' => 'Greek'
];

print_r($countries);
echo $countries['country2']; //Denmark
echo '<br>';
var_dump($countries); //daha detayli veriyor array'i


//person -arrayin bütün elemanlari ayni typ olmak zorunda degil

$person = [
    'name' => 'Sevde',
    'age' => 28
];



/* cok boyutlu arrayler */

$cars = [
    'Volkswagen' => ['Golf', 'Polo', 'Passat', 'Caddy'],
    'Honda',
    'Audi'
];

echo '<pre>';

$Volkswagen = ['Golf', 'Polo', 'Passat', 'Caddy'];

print_r($cars);
echo $cars['Volkswagen'][2]; //Passat



