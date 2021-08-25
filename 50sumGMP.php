<?php

function sumGMP(array $array): string
{
    $sum = "0";
    foreach ($array as $number) {
        $sum = gmp_add($sum, $number);
        gmp_strval($sum);
    }

    return $sum;
}