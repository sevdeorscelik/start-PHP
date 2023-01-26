<?php

// anonim - isimsiz fonksiyon

//normal func.:
function sum1(){
    return 2+2;
}
echo sum1();

// anonim func:

//fonksiyona isim vermiyoruz, bir degiskene atiyoruz. z.B.:

$sum2 = function($number1, $number2){
    return $number1 + $number2;
};

echo $sum2(2,3);
// echo $sum2( number1:5, number2:4); // diese method gibt mir problem?wieso?


echo '<br>';
////////////////////////////////////

$array = [
    2,3,4,5,6
];

$array = array_map(function ($e){
    return 2*$e;
}, $array);

print_r($array);



echo '<br>';
///////////////////
