<?php

function reverseArray($arr)
{
    $e = count($arr) - 1;
    $s = 0;

    while ($s < $e) {
        $aux = $arr[$e];
        $arr[$e] = $arr[$s];
        $arr[$s] = $aux;
        ++$s;
        --$e;
    }

    return $arr;
}

$array = [1,3,5,6,9,10,2];

var_dump($array);
echo '<br>';
var_dump(reverseArray($array));