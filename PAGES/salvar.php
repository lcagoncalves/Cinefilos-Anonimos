<?php
session_start();
require "../config.php";

if (!isset($_SESSION['id'])) {
    echo "erro-sessao";
    exit;
}

$id = $_SESSION['id'];

$lista = json_decode($_POST['lista'], true);

if (!$lista) {
    echo "erro-lista";
    exit;
}

$conexao->query("DELETE FROM dados WHERE id_usuario = '$id'");

foreach ($lista as $f) {
    $titulo = $f["titulo"];
    $nota = $f["nota"];
    $resenha = $f["resenha"];
    $url = $f["url"];
    $categoria = $f["categoria"];

    $sql = "INSERT INTO dados (id_usuario, nome, nota, categoria, comentario, imagem) 
            VALUES ('$id', '$titulo', '$nota', '$categoria', '$resenha', '$url')";

    mysqli_query($conexao, $sql);
}

echo "sincronizado";
?>
