# Задача на сложение очень больших чисел в PHP

Найти минимум 3 способа как сложить на PHP 50 цифр по 50 знаков.

## Первый способ:
Для этого способа необходимо большие числа представить в виде строки и иметь расширение GMP ([посмотреть код](50sumGMP.php))


## Второй способ:
С помощью расширения BCMath ([посмотреть код](50sumBCMath.php))


## Третий способ:
Мой вариант реализации сложения строк ([посмотреть код](50sumString.php))

## Посмотреть результаты трех вариантов на одном массиве:
```shell
php 50sum.php
```