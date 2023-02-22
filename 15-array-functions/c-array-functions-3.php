<?php

// in_array();          - bir elemanin arrayde olup olmadigina bakar
// array_shift();       - arrayin basindan bir elemean cikarir
// array_pop();         - arrayin sonunda eleman cikarir
// array_slice();       - arrayin bir kismini döndürür // array_slice($arr, -2, 1)
// array_sum();         - arraydeki degerleri toplar
// array_product();     - arraydeki elemanlarin carpimini bulur
// array_unique();      - cift olan degerleri siler
// array_values();      - arrayin tüm degerlerini döndürür
// array_push();        - dizinin sonuna eleman ekler
// array_unschift();    - arrayin basina ele,am ekler
// array_keys();        - bir dizideki tüm anahtarlari 


//array_key()
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array)); //Array ( [0] => 0 [1] => color )
echo '<br>';

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue")); //Array ( [0] => 0 [1] => 3 [2] => 4 )
echo '<br>';

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array)); //Array ( [0] => color [1] => size )
echo '<br>';