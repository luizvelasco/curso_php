<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Xícara";
$descricao = "É uma xícara usada de cor rosa";

$q = "INSERT INTO itens (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();