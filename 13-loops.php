<?php


//for
//foreach
//while-do while



//foreach;

$countries = [ 'Kroatien', 'Portugal', 'Italy', 'Spain'];

foreach( $countries as $country){

    echo $country.'<br>';

};

foreach( $countries as $key => $country){

    echo $key.'-'.$country.'<br>';
    //bu sekilde basinda indexlerini de görürüz.

};