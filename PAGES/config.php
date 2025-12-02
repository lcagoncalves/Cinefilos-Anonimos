<?php


$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cinefilos_anonimos";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro de conexão: {$conexao->connect_error}";
}

?>