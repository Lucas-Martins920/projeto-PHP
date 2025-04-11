<?php
$mysqli = new mysqli("localhost", "root", "SUA_SENHA", "teste");

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

echo "Conexão com MySQL bem-sucedida!";
?>
