<?php

//FizzBuzz

for($i = 1; $i <= 100; $i++){

    //$iが３の倍数の時
    if (($i % 3 == 0) && ($i % 5 != 0)){
        echo $i," Fizz\n";
    }
    
    //$iが５の倍数の時
    elseif (($i % 3 != 0) && ($i % 5 == 0)) {
        echo $i," Buzz\n";
    }
    
    //$iが３と５の倍数の時
    elseif(($i % 3 == 0) && ($i % 5 == 0)){
        echo $i," FizzBuzz\n";
    }
    //$iが3の倍数でも5の倍数でもない場合
    elseif(($i % 3 != 0) && ($i % 5 != 0)){
        echo $i,"\n";
    }

}