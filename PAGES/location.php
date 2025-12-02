<?php
session_start();
  //print_r($_REQUEST)

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);
    //print_r($$sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1 ){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);



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
