<?php
session_start();


  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    if ($result->num_rows == 1) {

        $usuario = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $usuario['id'];

        header('Location: principal.php');
    } 
    else {
        $_SESSION['erro'] = "E-mail ou senha incorretos.";
        header('Location: login.php');
    }


  }
  else{

    header('location: login.php');
    exit();
  }



?>

