<?php

$arr = [];

var_dump($arr);
echo "<br>";

// add valores
$arr[0] = 10;
$arr[1] = 15;
$arr[5] = 25;

var_dump($arr);
echo "<br>";

//modificando valores
$arr[1] += 25;
var_dump($arr);
echo "<br>";

$arrAssoc = [];

$arrAssoc["carro"] = "BMW";
var_dump($arrAssoc);
echo "<br>";

$arrAssoc["aviao"] = "boeing";
var_dump($arrAssoc);
echo "<br>";