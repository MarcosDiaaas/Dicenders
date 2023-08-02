<?php
    session_start();
    if(isset($_POST['submit'])){
        include_once('config.php');

        $email = $_POST['email'];
        $regsenha = $_POST['reg_password'];
        $confsenha = $_POST['conf_password'];
        $senha = '';
        $validRegex = '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
        
        

         if (!preg_match($validRegex, $email))
        {
            echo "Endereço de email inválido";
        } 
        else if(empty($regsenha || $confsenha))
        {
            echo "Coloque uma senha.";
        } 
        else if($regsenha != $confsenha)
        {
            echo "As senhas não coincidem, tente novamente.";
        } 
        else if (preg_match($validRegex, $email) && ($regsenha == $confsenha))
        {
            $_SESSION['senha'] = $_POST['conf_password'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nextform'] = true;
        
            header('Location:cadastrouser.php');
            exit();
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br" id="html" colormodel=>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!--Icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
        
    <!--Favicon-->
    <link rel="shortcut icon" href="img/001padrao.png" type="image/x-icon">
    <script src="js/code.js" defer></script>
    <script src="js/strongcheck.js"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.295/build/spline-viewer.js"></script>
    <title>Cadastro</title>
</head>
<body class="bg-4 bg-image inter-font" onload="document.getElementById('reg_username').focus()" theme-dicender=default>
    <a href="index.html"><i class="bi-arrow-left ms-3" style="font-size: xx-large;"></i></a>
    <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle" style="width: 30%;">
                <div class="card bg-glass text-2 mb-3 text-center">
                    <div class="card-body">
                        <h1 class="mb-5 login oswald-font fw-400">Cadastro</h1>
                        <form id="form-cadastro" enctype="multipart/form-data" action="cadastro.php" method='POST' autocomplete="off" onsubmit="return checkform( this ) ; ">
                            <div class="mb-3">
                                <input type="email" class="form-control bg-glass text-2 bs-0" id="reg_email" name="email" autocomplete="off" aria-describedby="emailHelp" placeholder="Email">
                                <p id="textEmail" class="mt-2"></p>
                                </div>
                                <div class="parent">
                                <input type="password" class="form-control bg-glass text-2 bs-0 input-lg" id="reg_password" name="reg_password" autocomplete="off" ng-model="register_password" onkeyup="checkstrength()" placeholder="Senha" style="padding-right: 2rem;">
                                <i class="bi-eye-slash" name="eye"  id="eye" onclick="viewReg()">
                                </i>
                            </div>
                            <div class="position-relative start-progressbar" id="progressBar">
                            </div>
                            <div>
                                <p id="textSenha" class="mt-2 text-center"></p> 
                            </div>
                            <div class="mb-3 parent">
                                <input type="password" class="form-control bg-glass text-2 bs-0 input-lg" id="conf_password" name="conf_password" autocomplete="off" ng-model="confirm_password" placeholder="Confirmar senha" style="padding-right: 2rem;">
                                <i class="bi-eye-slash" name="confirm_eye"  id="confirm_eye" onclick="viewConf()">
                                </i>
                            </div>
                            <div>
                                <p id="textConfirmSenha" class="mt-2 text-center"></p> 
                            </div>
                            <div class="svg-a" name="twittericon">
                                <a href=""><i class="bi-twitter" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class="svg-a" name="googleicon">
                                <a href=""><i class="bi-google" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class=" mb-3">
                            <button type="submit" name="submit" id="cardBtn" class="btn btn-primary btn-glass w-100" onclick="cadastrar(document.getElementById('reg_email'));">Continuar</button>
                            </div>
                            <div class="mt-2 mb-2">
                                <p class="fs-6 text-light">Já possui uma conta? <a href="login.php" class="text-2">Faça login</a></p>
                            </div>
                            <div class="mb-0">
                                <a href="#" class="text-2 fs-foot">Termos de uso</a>
                                <a href="#" class="text-2 fs-foot">Privacidade</a>
                                <a href="#" class="text-2 fs-foot">Fale conosco</a>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
    </div>
</body>
</html>