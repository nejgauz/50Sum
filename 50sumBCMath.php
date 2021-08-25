<?php

function sumBCMath(array $array): string 
{
    $sum = "0";
    foreach ($array as $number) {
        $sum = bcadd($sum, $number);
    }

    return $sum;
}

