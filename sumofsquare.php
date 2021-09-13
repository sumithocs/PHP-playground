<?php


declare(strict_types=1);

function squareOfSum(int $max)
{
    $sum = 0;
    $sum2 = array_sum(range(1, $max));
    for ($i = 1; $i <= $max; $i++) {
        $sum = $sum + $i;
        echo $sum . PHP_EOL;
    }
    return [$sum, $sum2];
}



var_dump(squareOfSum(5));
