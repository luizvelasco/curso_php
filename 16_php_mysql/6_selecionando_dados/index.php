<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$item = $result->fetch_assoc();
$itens = $result->fetch_all();

var_dump($itens);
echo "<br>";
var_dump($item);

$conn->close();