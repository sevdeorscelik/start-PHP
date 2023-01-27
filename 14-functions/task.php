<?php

/*
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
*/


function triangle($n){
  for( $i=0; $i <= $n; $i++){
    for($j=1; $j<$i; $j++){
        echo "0 ";
    }
    echo"\n";
  }
};

triangle(15);

