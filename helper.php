<?php

function generateBigStringNumberArray(int $digitQuantity, int $elementQuantity): array 
{
    $result = [];
    $numbers = "0123456789";
    $numbersWOZero = "123456789";
    for ($i = 0; $i < $elementQuantity; $i++) {
        $element = "";
        for ($j = 0; $j < $digitQuantity; $j++) {
            if ($j === 0) {
                $element .= $numbersWOZero[rand(0,8)];
            } else {
                $element .= $numbers[rand(0,9)];
            }
        }
        $result[] = $element;
    }

    return $result;
}