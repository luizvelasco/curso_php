<?php

$data = new DateTime();

var_dump($data);
echo "<br>";

$data->setDate(1999, 12, 25);
var_dump($data);
echo "<br>";

$data->setTime(05,12,10);
var_dump($data);
echo "<br>";

echo $data->format('d/m/y');