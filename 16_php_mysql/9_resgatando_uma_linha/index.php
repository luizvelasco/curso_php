<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();

var_dump($data);

$stmt->close();