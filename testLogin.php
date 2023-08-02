<?php
    
    session_start();
    //print_r($_REQUEST);
    
    if(isset($_POST['submit']) && !empty($_POST['usertag']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $usertag = $_POST['usertag'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM usuarios WHERE usertag = '$usertag' and senha = '$senha'";
        $result = $conexao -> query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            
            //print_r('Conta não existe');
            unset($_SESSION['usertag']);
            unset($_SESSION['senha']);
            header('Location: login.php');

        }
        else
        {
            //print_r('Conta existe');
            $linha = mysqli_fetch_assoc($result);
            $username = $linha['username'];
            $imgperfil = $linha['imgperfil'];
            $_SESSION['usertag'] = $usertag;
            $_SESSION['imgperfil'] = $imgperfil;
            $_SESSION['username'] = $username;
            $_SESSION['senha'] = $senha;
            header('Location: menu.php');

        }

    } 
    else
    {
        header('Location: login.php');
    }
    
?>