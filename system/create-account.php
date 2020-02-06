<?php 
    require_once '../system/config.php';
    
    $login = $_POST['login'];
    $email = $_POST['email'];
    $cadastrar = $_POST['cadastrar'];
    $senha = md5($_POST['senha']);

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "login_system";

    $connect = new mysqli($host, $user, $pass, $db);

    if(isset($cadastrar)) {
       $result = $connect->query("INSERT INTO `users` (`id`, `email`, `login`, `senha`) VALUES (NULL, '$email', '$login', '$senha')");
       if(!$result) {
             echo "<script> alert('Falha ao cadastar usuário!'); window.location.href='". HOME ."cadastro.php';</script>";
             $connect->error();
            die();
       } else {
            echo "<script> alert('Usuário cadastrado com sucesso!'); window.location.href='". HOME ."' </script>";
       }
    }
?>