<?php
session_start();
include_once("config.php");

if (!isset($_SESSION['id'])) {
    echo json_encode([]);
    exit();
}

$idUsuario = $_SESSION['id'];


$sql = "SELECT * FROM dados WHERE id='$idUsuario'";
$result = mysqli_query($conexao, $sql);

$filmes = [];

while ($linha = mysqli_fetch_assoc($result)) {
    $filmes[] = $linha;
}

echo json_encode($filmes);
?>