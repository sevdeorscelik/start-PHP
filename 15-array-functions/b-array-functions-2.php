<?php

// shuffle();                   - bir diziyi karistirir.
// array_combine();             - key ve value'lar icin ayri ayri array olusturur.  
// array_count_values();        - bir dizideki tüm degerleri sayar.
// array_flip();                - bir arrayde key ve value'nun yerlerini degistirir
// array_key_exist();           - Belirtilen key veya indisin array'de olup olmadigini kontrol eder.
// array_map();                 - Belirtilen arraylerin elemanlarını geriçağırım işlevini uygular.
// array_filter();              - Bir arrayin elemanlarını filtreler.
// array_merge();
// array_rand();
// array_reverse();
// array_search();


//shuffle()
$numbers = range(1, 20);
shuffle( $numbers );
foreach( $numbers as $number ) {
    echo "$number "; //10 2 11 13 17 8 19 6 20 15 9 18 1 14 16 4 12 3 5 7
};
echo '<br>';


// array_combine(); 
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c ); //Array ( [green] => avocado [red] => apple [yellow] => banana )
echo '<br>';


//array_count_values();
$arr = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($arr)); //Array ( [1] => 2 [hello] => 2 [world] => 1 )
echo '<br>';


// array_flip();
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped); //Array ( [oranges] => 0 [apples] => 1 [pears] => 2 )
echo '<br>';


//array_key_exist();
$arry = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $arry)) {
    echo "There is 'first' element in array."; // There is 'first' element in array.
} 
echo '<br>';


// array_map();
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b); //Array ( [0] => 1 [1] => 8 [2] => 27 [3] => 64 [4] => 125 )
echo '<br>';


// array_filter();
function tek($var)
{
   //tamsayı girdi tek sayı mı diye bakar
    return $var & 1;
}

function cift($var)
{
   //tamsayı girdi çift sayı mı diye bakar
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo " Tek:\n";
print_r(array_filter($array1, "tek"));
echo "Çift:\n";
print_r(array_filter($array2, "cift"));


// array_merge();
// array_rand();
// array_reverse();
// array_search();












