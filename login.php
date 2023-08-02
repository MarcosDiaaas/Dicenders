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
    <title>Login</title>
</head>
<body class="bg-4 bg-image inter-font" theme-dicender=default>
    <a href="index.html"><i class="bi-arrow-left ms-3" style="font-size: xx-large;"></i></a>
    <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle" style="width: 30%;">
                <div class="card bg-glass text-2 mb-3 text-center" >
                    <div class="card-body">
                        <h1 class="mb-5 login oswald-font fw-400">Login</h1>
                        <form action="testLogin.php" method="POST">
                            <div class="mb-3 parent">
                            <input type="text" name="usertag" class="form-control bg-glass text-2 bs-0" id="InputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário"  style="padding-left: 2rem;">
                            <i class="bi-at fs-5" id="at"></i>
                            </div>
                            <div class="mb-3 parent">
                            <input type="password" id="reg_password" name="senha" class="form-control bg-glass text-2 bs-0" id="InputPassword1" placeholder="Senha">
                            <i class="bi-eye-slash" name="eye"  id="eye" onclick="viewReg()">
                            </i>
                            </div>
                            <div class="mb-2 form-check text-start">
                            <input type="checkbox" class="form-check-input bs-0" id="checkbox">
                            <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
                            </div>
                            <div class="svg-a" name="twittericon">
                                <a href=""><i class="bi-twitter" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class="svg-a" name="googleicon">
                                <a href=""><i class="bi-google" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class=" mb-3">
                            <input type="submit" name="submit" class="btn btn-primary btn-glass w-100" value="Sign in"></button>
                            </div>
                            <div class="mt-2 mb-2">
                                <p class="fs-6 text-light">Não tem uma conta? <a href="cadastro.php" class="text-2">Cadastre-se</a></p>
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