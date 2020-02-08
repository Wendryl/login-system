<?php 
    require_once '../system/config.php';

    if(isset($_POST['recuperar'])) {
        $to = $_POST['email'];
        $subject = 'Recuperação de Senha do site';
        $message = 'TESTEZÃO MEU IRMÃO';
    
        $result = mail($to, $subject, $message);
    
        if(!$result) {
            $errorMessage = error_get_last()['message'];
            echo $errorMessage;
        }
        else {
            echo "<script> alert('Um e-mail foi enviado para ". $to .", com as informações necessárias para recuperação de sua senha.')"; 
            echo "<script>window.location.href='". HOME."'; </script>";
        }
    }

?>