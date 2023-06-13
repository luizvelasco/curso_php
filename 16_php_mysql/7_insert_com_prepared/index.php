<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Suporte de Monitor";
$descricao = "O suporte é novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao); //ss = string, i = integer, d = double

$stmt->execute();

$stmt->close();