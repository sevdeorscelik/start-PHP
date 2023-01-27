<?php

## Global Tanimi ## 

//global komutu ile disaridaki bir tanimi fonksiyonun icerisinde tnaimlayip kullanabiliriz

$name = 'Sevde';

function nameWriter(){
   global $name;
   return $name;
}

echo nameWriter(); //Sevde veriyor
