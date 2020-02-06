<?php 
    
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['pass']);

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "login_system";

    $connect = new mysqli($host, $user, $pass, $db);

    if(isset($entrar)) {
        $verifica = $connect->query("SELECT * FROM users WHERE login = '$login' AND senha = '$senha'") or die("Erro ao selecionar");
        if(mysqli_num_rows($verifica) <= 0) {
            echo "<script> alert('Login e/ou senha incorretos'); window.location.href='http://localhost/projects/teste/index.php';</script>";
            die();
        } else {
            setcookie("login", $login);
            header("Location:http://localhost/projects/teste/pagina.php");
        }
    }
?>