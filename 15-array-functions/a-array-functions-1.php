<?php

// print_r(); variable ya da arrayi ekranda gösterir
// var_dump(); bir variable'i detayli özellikleri ile gösterir
// explode(); //bir dizenin elemanlarini ayirir.
// implode(); //bir deizenin elemanlarini birlestirip tek dizge yapar.
// count(); //array'in eleman sayisini verir
// is_array(); //arrayse 1, degilse 0 verir.

//schuffle();
// array_combine()
// array_count_values()
// array_flip()
// array_key_exists()
// array_map()
// array_filter()
// array_merge()
// array_rand()
// array_rand()
// array_reverse()
// array_reverse()




$categories = [ 
    [ 
        'id' => 1 ,
        'name' => 'Back - end ' 
    ], 
    [ 
        'id' => 2 ,
        'name' => 'Front - End ' 
    ], 
    [ 
        'id' => 3 ,
        'name' => 'mobile' 
    ], 
   
];

$var = ['value1', 'value2', 'value3'];


//print_r($categories);
//var_dump($categories);

$imp = implode('=', $var);   //value1=value2=value3
//print_r($imp);

$exp = explode('=', $imp);
print_r($exp);

echo count($var); //3

echo is_array($var); //1

