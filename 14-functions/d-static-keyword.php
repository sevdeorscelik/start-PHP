<?php

## Static Keyword ##

function counter(){

    $num = 0;
    echo $num;
    $num++;
};

counter();
counter();
counter();
counter();
counter();

//00000 verir.

echo '<br>';

function counter2(){

    static $num2 = 0;
    echo $num2;
    $num2++;
};

counter2();
counter2();
counter2();
counter2();
counter2();

//01234 verir.
