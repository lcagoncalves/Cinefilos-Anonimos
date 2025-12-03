<?php
session_start();
require "../config.php";

if (!isset($_SESSION['id'])) {
    echo json_encode([]);
    exit;
}

$id = $_SESSION['id'];

$sql = "SELECT * FROM dados WHERE id_usuario = '$id'";
$result = $conexao->query($sql);

$filmes = [];

while ($row = mysqli_fetch_assoc($result)) {
    $filmes[] = [
    "id" => $row["id"],
    "titulo" => $row["nome"],
    "nota" => $row["nota"],
    "categoria" => $row["categoria"],
    "resenha" => $row["comentario"],
    "url" => $row["imagem"]
];
}

echo json_encode($filmes);
?>