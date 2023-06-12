<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

var_dump($result);

$conn->close();