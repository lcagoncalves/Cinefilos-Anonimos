<?php
session_start();


  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1 ){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    $_SESSION['erro'] = "E-mail ou a senha estão diferentes. tente novamente.";

    header('location: login.php');
    }
    else{
    header('Location: principal.php');
    }


  }
  else{

    header('location: login.php');
    exit();
  }



?>
