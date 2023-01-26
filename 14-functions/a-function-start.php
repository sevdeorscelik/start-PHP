<?php

function name(){
    echo'Sevde'; 
}

name();


// fonksiyonlar genelde echo komutu ile döndürülmez. Su sekilde yapilir:

function surname(){
    return'Örscelik';
}

echo surname();