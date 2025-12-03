<?php
session_start();

if(isset($_POST['submit'])){

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    if ($senha !== $confirmar) {
        $_SESSION['erro'] = "As senhas estão diferentes";
        header("Location: cadastro.php");
        exit();
    } else{

    

    $sql_check = "SELECT * FROM cadastro WHERE email = '$email' OR usuario = '$usuario'";
        $resultado_check = mysqli_query($conexao, $sql_check);

        if (mysqli_num_rows($resultado_check) > 0) {
           $_SESSION['erro'] = "O E-mail ou o usuário já foram cadastrados. Tente novamente";
           header("Location: cadastro.php");
                   exit();
        } else {


            $sql = "INSERT INTO cadastro(usuario, email, senha) 
                    VALUES ('$usuario', '$email', '$senha')";

            if (mysqli_query($conexao, $sql)) {
                header("Location: login.php");
                exit();
            } else {
                $erro = "Erro ao salvar no banco.";
            }
        }
    }

}

?>
<?php
if (isset($_SESSION['erro'])) {
    echo "<script>alert('" . $_SESSION['erro'] . "');</script>";
    unset($_SESSION['erro']);
}
?>
<?php
if (isset($_SESSION['erro'])) {
    echo "<script>alert('" . $_SESSION['erro'] . "');</script>";
    unset($_SESSION['erro']);
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
    
<form action="cadastro.php" method="POST">


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
    <button type="submit" name="submit">Confirmar</button>
    </section>
</form>

</main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>
</html>
