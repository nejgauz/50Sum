<?php
require_once('helper.php');
require_once('50sumGMP.php');
require_once('50sumBCMath.php');
require_once('50sumString.php');

$array = generateBigStringNumberArray(50, 50);
var_dump($array);

echo "Мой вариант: " . sumBigNumbersString($array, 50) . PHP_EOL;
echo "BCMath:      " . sumBCMath($array) . PHP_EOL;
echo "GMPSUM:      " . sumGMP($array) . PHP_EOL;