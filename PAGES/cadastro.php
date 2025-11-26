<?php
include_once("../ASSETS/DATA/conexao.php");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    if ($senha !== $confirmar) {
        die("As senhas estão diferentes!");
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro (Usuario, Email, Senha) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $senha_hash);

    if ($stmt->execute()) {
        header("Location: principal.html");
        exit();
    } else {
      $error_message = "Erro ao cadastrar. Tente novamente."; 
        if ($stmt->errno === 1062) {
                $mensagem_erro = "Este E-mail ou Nome de Usuário já está cadastrado!";
            } else {
                $mensagem_erro = "Erro ao cadastrar. Tente novamente.";
            }
        }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="../ASSETS/CSS/cadastro.css">
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
        
         <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required placeholder="Digite seu Usuario"> <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required placeholder="Digite seu E-mail"> <br>


         <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required minlength="8" equired placeholder="Digite sua senha"> <br>
        <p>minimo de 8 caracteres, sem espaço</p>


         <label for="confirmar">Senha:</label>
        <input type="password" name="confirmar" id="confirmar" required minlength="8" required placeholder="confirme sua senha"> <br>
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