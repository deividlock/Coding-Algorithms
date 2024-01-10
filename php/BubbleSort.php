<?php

function bubbleSort($array)
{
    $num = count($array);
    for($i = 1; $i < $num - 1; $i++) {
        for($j = 0; $j < $num - $i; $j++) {
            if($array[$j] > $array[$j + 1]) {
                $aux = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $aux;
            }
        }
    }
    return $array;
}

$array = [45,76,2,5,100,53,23,98,32,65];

var_dump($array);
var_dump(bubbleSort($array));
