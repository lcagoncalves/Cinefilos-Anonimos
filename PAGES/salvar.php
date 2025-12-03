<?php
session_start();
include_once("config.php");

if (!isset($_SESSION['id'])) {
    echo "erro";
    exit();
}

$idUsuario = $_SESSION['id'];

$dados = json_decode(file_get_contents("php://input"), true);

$nome       = $conexao->real_escape_string($dados["nome"]);
$categoria  = $conexao->real_escape_string($dados["categoria"]);
$nota       = (int)$dados["nota"];
$comentario = $conexao->real_escape_string($dados["comentario"]);
$imagem     = $conexao->real_escape_string($dados["imagem"]);

$sql = "INSERT INTO dados (id, nome, categoria, nota, comentario, imagem)
VALUES ('$idUsuario', '$nome', '$categoria', '$nota', '$comentario', '$imagem')";

if (mysqli_query($conexao, $sql)) {
    echo "salvo";
} 

else {
    echo "erro";
}
?>