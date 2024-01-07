<?php
/**
 * Generate Fibonacci Squence
 * @param int $n the stop
 * @return array $data the fibonacci sequence array
 */
function generateSequnce($n)
{
    $data = [0,1];
    $i = 2;
    while($i <= $n) {
        $data[$i] = $data[$i - 1] + $data[$i - 2];
        ++$i;
    }
    return $data;
}

print_r(generateSequnce(10));
