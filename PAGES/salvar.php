<?php
session_start();
require "../config.php";

if (!isset($_SESSION['id'])) {
    echo "erro-sessao";
    exit;
}

$id = $_SESSION['id'];

$titulo = $_POST['titulo'];
$nota = $_POST['nota'];
$resenha = $_POST['resenha'];
$url = $_POST['url'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO dados (id_usuario, nome, nota, categoria, comentario, imagem) 
VALUES ('$id', '$titulo', '$nota', '$categoria', '$resenha', '$url')";

if (mysqli_query($conexao, $sql)) {
    echo "salvo";
} else {
    echo "erro";
}
?>