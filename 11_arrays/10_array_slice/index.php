<?php

$arr = [2,4,6,8,10,12,14,16,18];

$slice1 = array_slice($arr, 1, 3);

var_dump($slice1);
echo "<br>";

$slice2 = array_slice($arr, 4, 4);

var_dump($slice2);
echo "<br>";


$slice4 = array_slice($arr, 4, -3);

var_dump($slice4);
echo "<br>";