<?php


$dbHost = "sql100.infinityfree.com";
$dbUsername = "if0_40581647";
$dbPassword = "leticia302010";
$dbName = "if0_40581647_cinefilos";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro de conexão: {$conexao->connect_error}";
}

?>