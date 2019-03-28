<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  

  if(isset($email) and empty($email)){
    if(isset($senha) and empty($senha)){
        //TODO requisição com o banco para validar a senha
      header('location: ../views/logado.php');
    }
  }

 ?>
