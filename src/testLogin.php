<?php

    session_start();
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once("config.php");
        $email = $_POST['email'];
        $senha = $_POST['senha'];
/*  
        print_r("Email: " . $_POST['email']);
        print_r("<br>");
        print_r('Senha: ' . $_POST['senha']);
*/
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);
        

        if(mysqli_num_rows($result) > 0)
        {
            $nome = mysqli_fetch_assoc($result);

            // Verifica se a senha está criptografada corretamente
            if(password_verify($senha, $nome['senha']))
            {
                // Armazena as informações do usuário na sessão
                $_SESSION['email'] = $nome['email'];
                $_SESSION['senha'] = $nome['senha'];

                // Redireciona o usuário para a página principal
                header('Location: sistema.php');
            }
            else
            {
                // Senha incorreta
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
            }
        }
        }
    else{
        header('Location: login.php');
    }

?>