<?php

$x= 10;

$y = & $x;

echo $x;
echo "<br>";

echo $y;
echo "<br>";

$y = 15;

echo "Atribuição por referência";
echo "<br>";
echo $x;
echo "<br>";

echo $y;
echo "<br>";