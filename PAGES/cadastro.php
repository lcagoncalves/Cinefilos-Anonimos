<?php
include_once("../DATA/conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    if ($senha !== $confirmar) {
        die("As senhas não coincidem!");
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro (Usuario, Email, Senha) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $senha_hash);

    if ($stmt->execute()) {
        header("Location: ../principal.html");
        exit();
    } else {
        echo "Erro ao cadastrar!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="/ASSETS/CSS/cadastro.css">
    <link rel="icon" href="/ASSETS/IMAGENS/icon.imagem.jpg">
</head>
<body>
    <header>
        <h1>CINÉFILOS ANÔNIMOS</h1>
    </header>
<main>

     <h2 id="login">Cadastre-se</h2>

    <form method="POST">

    <section id="cadastro"> 
        
         <label for="usuario">Digite seu nome de Usuario"</label>
        <input type="text" name="usuario" id="usuario" required placeholder="Digite seu Usuario"> <br>

        <label for="email">Digite seu E-mail</label>
        <input type="email" name="email" id="email" required placeholder="Digite seu E-mail"> <br>


         <label for="senha">Digite sua senha"</label>
        <input type="password" name="senha" id="senha" required placeholder="Digite sua senha"> <br>
        <p>minimo de 8 caracteres, sem espaço</p>


         <label for="confirmar">confirme sua senha"</label>
        <input type="password" name="confirmar" id="confirmar" required placeholder="confirme sua senha"> <br>
        <p>minimo de 8 caracteres, sem espaço</p>
    </section>

    <section id="botao">
    <button type="submit">Confirmar</button>
    </section>
    </form>

</main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>
</html>