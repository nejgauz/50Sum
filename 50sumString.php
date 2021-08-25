<?php

function sumBigNumbersString(array $array, int $digitQuantity): string 
{
    $globalSum = "";
    $globalExtras = [];

    for ($i = $digitQuantity - 1; $i >= 0; $i--) {
        $digitSum = 0;
        // складываем все цифры одного разряда
        foreach ($array as $key => $number) {
            $digitSum += (int)$number[$i];
        }
        
        if ($digitSum < 10) {
            $globalSum = (string)$digitSum . $globalSum;
            continue;
        }

        
        $digitSum = (string)$digitSum;
        if ($i === 0) {
            if (empty($globalExtras)) {
                $globalSum = $digitSum . $globalSum;
                continue;
            }
            foreach ($globalExtras as $extra) {
                $digitSum += $extra;
            }
            $globalSum = $digitSum . $globalSum;
            continue;
        }
        $globalSum = $digitSum[strlen($digitSum) - 1] . $globalSum;
        // если индекс последнего разряда суммы цифр одного разряда больше, чем общий индекс цикла $i, 
        // то новое число для прибавления будет превышать 50 цифр. Этот случай стоит учесть отдельно.
        // Оставляем в $digitSum только то, что не превышает 50 цифр, остальное отправляем в отдельный массив $globalExtras,
        // которым мы воспользуемся при подсчете суммы разряда нулевого индекса.
        if ((strlen($digitSum) - 1) > $i) {
            $globalExtras[] = substr($digitSum, 0, (strlen($digitSum) - 1 - $i)) * 10;
            $digitSum = substr($digitSum, (strlen($digitSum) - 1 - $i));
        }
        // формируем остаток и добавляем его в массив складываемых чисел
        $extra = $digitSum;
        $extra[strlen($extra) - 1] = "0";
        $rightNullsQuantity = $digitQuantity - 1 - $i;
        $strLength = strlen($digitSum) + $rightNullsQuantity;
        $extra = str_pad($extra, $strLength, "0", STR_PAD_RIGHT);
        $extra = str_pad($extra, $digitQuantity, "0", STR_PAD_LEFT);
        $array[] =  $extra;
    }
    
    return $globalSum;
}