<?php

$arr = [
    'Matheus' => 29,
    'PEdro' => 18,
    'Joaquim' => 14,
    'Maria' => 12,
];

asort($arr);
var_dump($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 12,
    'PEdro' => 44,
    'Joaquim' => 14,
    'Maria' => 32,
];


arsort($arr2);
var_dump($arr2);
echo "<br>";

ksort($arr2);
var_dump($arr2);
echo "<br>";

krsort($arr2);
var_dump($arr2);
echo "<br>";