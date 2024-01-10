<?php

function binarySearch($array, $needle)
{
    $i = 0;
    $end = count($array);
    while ($i < $end) {
        $m = floor($i + ($end - $i) / 2);

        if ($array[$m] == $needle) {
            return $m;
        } elseif ($array[$m] < $needle) {
            $i = $m + 1;
        } else {
            $end = $m - 1;
        }
    }

    return -1;
}

$array = [1,2,3,4,5,6,7,8,9,10];


// Find 4
var_dump(binarySearch($array, 4));
// Find 10
var_dump(binarySearch($array, 10));
// Find 1
var_dump(binarySearch($array, 1));
// Find 11
var_dump(binarySearch($array, 11));
