<?php

$number=1; //integer

$float=1.2; //float

$int_float=(int)$float; //integer

$str_float=(string)$float; //String

$str_boolean=(bool)$float; //boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int
{
    return $atu*$dua;
}

/** 
* Operator
* subtract(-)
* addition(+)
* divide(/)
* modulus(%)
* increment(++)
* decrement(--)
*
*/

echo 4/2; //2
echo PHP_EOL;
echo 4%2 ;// 0


$angka=1;
$angka++; // 2
$angka--; // 1
$angka+=9; // 10
$angka/=5; //2
$angka.=7; // 2 dan 7

echo PHP_EOL;
echo$angka;

for($x=1;$x<=10;$x++)
{
    echo $x.PHP_EOL;
}