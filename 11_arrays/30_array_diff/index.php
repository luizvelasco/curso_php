<?php

$arr1 = [1,2,3];
$arr2 = [2,4,6];

$diff = array_diff($arr1, $arr2);
var_dump($diff);

$diff2 = array_diff($arr2, $arr1);
var_dump($diff2);