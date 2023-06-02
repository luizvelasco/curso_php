<?php 

//Regatar elementos de array
//remover elementos

$arr = [1,2,3,4,5,6];

$removidos = array_splice($arr, 1, 2);
var_dump($arr);
echo "<br>";
var_dump($removidos);
echo "<br>";

$arr2 = [1,2,3,4,5,6];

$removidos2 = array_splice($arr2, 3);

var_dump($arr2);
echo "<br>";
var_dump($removidos2);
echo "<br>";

$arr3 = [1,2,3,4,5,6];

$removidos3 = array_splice($arr3, 1, -1);

var_dump($arr3);
echo "<br>";
var_dump($removidos3);
echo "<br>";