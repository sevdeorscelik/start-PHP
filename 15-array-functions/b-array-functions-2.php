<?php

// shuffle();                   - bir diziyi karistirir.
// array_combine();             - key ve value"lar icin ayri ayri array olusturur.  
// array_count_values();        - bir dizideki tüm degerleri sayar.
// array_flip();                - bir arrayde key ve value"nun yerlerini degistirir
// array_key_exist();           - Belirtilen key veya indisin array"de olup olmadigini kontrol eder.
// array_map();                 - Belirtilen arraylerin elemanlarını geriçağırım işlevini uygular.
// array_filter();              - Bir arrayin elemanlarını filtreler.
// array_merge();               - Belirtilen arraylari arka arkaya koyor ve yeni bir dizi olusturur.
// array_rand();                - Bir dizeden belli sayida rastgele key döndürür.
// array_reverse();             - Diziyi tersine cevirip siralar
// array_search();              - Bir arrayde belirtilen degeri arar ve bulursa ilgili ilk key'i döndürür


//shuffle()
$numbers = range(1, 20);
shuffle( $numbers );
foreach( $numbers as $number ) {
    echo "$number "; //10 2 11 13 17 8 19 6 20 15 9 18 1 14 16 4 12 3 5 7
};
echo "<br>";


// array_combine(); 
$a = array("green", "red", "yellow");
$b = array("avocado", "apple", "banana");
$c = array_combine($a, $b);
print_r($c ); //Array ( [green] => avocado [red] => apple [yellow] => banana )
echo "<br>";


//array_count_values();
$arr = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($arr)); //Array ( [1] => 2 [hello] => 2 [world] => 1 )
echo "<br>";


// array_flip();
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped); //Array ( [oranges] => 0 [apples] => 1 [pears] => 2 )
echo "<br>";


//array_key_exist();
$arry = array("first" => 1, "second" => 4);
if (array_key_exists("first", $arry)) {
    echo "There is 'first' element in array."; // There is "first" element in array.
} 
echo "<br>";


// array_map();
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map("cube", $a);
print_r($b); //Array ( [0] => 1 [1] => 8 [2] => 27 [3] => 64 [4] => 125 )
echo "<br>";


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

$array1 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo " Tek:\n";
print_r(array_filter($array1, "tek"));
echo "Çift:\n";
print_r(array_filter($array2, "cift"));
echo "<br>";


// array_merge();
$arrr1 = array("color" => "red", 2, 4);
$arrr2 = array("a", "b", "color" => "green", "shape" => "transpezoid", 4) ;
$result = array_merge($arrr1, $arrr2);
print_r($result); //Array ( [color] => green [0] => 2 [1] => 4 [2] => a [3] => b [shape] => transpezoid [4] => 4 )
echo "<br>";


// array_rand();
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n"; // Morpheus 
echo $input[$rand_keys[1]] . "\n"; // Trinity
echo "<br>";


// array_reverse();
$data  = array("php", 4.0, array("green", "red"));
$data_reverse = array_reverse($data);
$data_reverse_normal = array_reverse($data, true);

print_r($data); //Array ( [0] => php [1] => 4 [2] => Array ( [0] => green [1] => red ) )
echo "<br>";
print_r($data_reverse); //Array ( [0] => Array ( [0] => green [1] => red ) [1] => 4 [2] => php )
echo "<br>";
print_r($data_reverse_normal); //Array ( [2] => Array ( [0] => green [1] => red ) [1] => 4 [0] => php )
echo "<br>";


// array_search();
$eg_arr = array(0=>'blue', 1=>'pink', 2=>'yellow');
$key_pink = array_search('pink', $eg_arr); 
print_r($key_pink); // 1
echo "<br>";
$key_green = array_search('green', $eg_arr);
print_r($key_green); // bosluk döndürüyor
echo "<br>";












