<!--
<?php
    session_start();
    
    if($_SESSION['nextform'] != true){
        header('Location: login.php');
      }

    if(isset($_POST['submit'])){
        include_once('config.php');

    
        $username = $_POST['username'];
        $usertag = $_POST['usertag'];
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        

        if(isset($_FILES['arquivo'])){
            include_once('config.php');
    
            
            $arquivo = $_FILES['arquivo'];
            
            if ($arquivo['size'] > 2097152){
            echo('Arquivo muito grande! Limite de 2MB');
            }
    
            if($arquivo['error']){
            echo('Falha ao enviar arquivo.');
            }
            
            $pasta = "arquivos/";
            $nomeArquivo = $arquivo['name'];
            $novonomeArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    
            if($extensao != "jpg" && $extensao != "jpeg" && $extensao != "png" && $extensao != ""){
                echo("Tipo de arquivo não aceito.");
            }

            $sucesso = move_uploaded_file($arquivo["tmp_name"], $pasta. $novonomeArquivo . "." . $extensao);
        }
        if(empty($username))
        {
            echo "Username vazio";
        } 
        else if (empty($usertag))
        {
            echo "Nome de usuário vazio.";
        } 
        else if (!empty($username) && !empty($usertag))
        {
            $query =  mysqli_query($conexao,"INSERT INTO usuarios(username,usertag,email,senha,imgperfil) VALUES('$username','$usertag','$email', '$senha', '$novonomeArquivo.$extensao')");
            $_SESSION['nextform'] == false;
            header('Location:login.php');
        }
        session_unset();
        session_destroy();
        }
        
    
    ?>
-->

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
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.295/build/spline-viewer.js"></script>
    <title>Cadastro de identidade</title>
    <script language="javascript">
        function checkform( frm )
        {
            
            var username = document.getElementById('reg_username').value;
            var user = frm.usertag.value;
            if(!username){
            //alert('O username é obrigatório.');
            document.getElementById('textUser').classList.add("text-danger");
            document.getElementById('textUser').innerHTML = "O username é obrigatório.";
            document.getElementById('reg_username').focus();
            } else{
                document.getElementById('textUser').innerHTML = "";
            }
            if ( user.search( /\s/g ) != -1 || user.search( "@" ) != -1 )
            {
                document.getElementById('textTag').classList.add("text-danger");
                document.getElementById('textTag').innerHTML= "Não é permitido espaços em branco ou @.";
                user = user.replace( "@" , "" );
                user = user.replace( /\s/g , "" );
                document.getElementById('reg_usertag').focus();
            } else{
                document.getElementById('textTag').innerHTML = "";
            }	
            if ( document.getElementById('textTag').innerHTML != "")
            {
                frm.usertag.value = user;
                return false ;
            }
            return true ;	
        }

    </script>
</head>
<body class="bg-4 bg-image inter-font" onload="document.getElementById('reg_username').focus()" theme-dicender=default>
    
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle" style="width: 50%;">
            <div class="card bg-glass text-2 mb-3 text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h1 class="mb-5 login oswald-font fw-400">Identidade</h1>
                            <form id="form-cadastro" action="cadastrouser.php" enctype="multipart/form-data" method='POST' autocomplete="off" onsubmit="return checkform( this ) ; ">
                                <div class="mb-3">
                                    <input type="text" minlength="4" maxlength="30" class="form-control bg-glass text-2 bs-0" id="reg_username" name="username" autocomplete="off" aria-describedby="emailHelp" placeholder="Nome de exibição">
                                    <p id="textUser" class="mt-2"></p>
                                </div>
                                <div class="parent mb-5">
                                    <input type="text" minlength="4" maxlength="15" class="form-control bg-glass text-2 bs-0" id="reg_usertag" name="usertag" autocomplete="off" aria-describedby="emailHelp" placeholder="Nome_de_usuário" style="padding-left: 2rem;">
                                    <i class="bi-at fs-5" id="at"></i>
                                </div>
                                <p id="textTag" class="mt-1"></p>
                                <div>
                                    <p id="textSenha" class="mt-2 text-center"></p> 
                                </div>
                                <div>
                                    <p id="textConfirmSenha" class="mt-2 text-center"></p> 
                                </div>
                                <span class="p-1">
                                </span>
                                <div class="mb-3 mt-3">
                                <button type="submit" name="submit" id="cardBtn" class="btn btn-primary btn-glass w-100" onclick="cadastrar(document.getElementById('reg_email'));">Cadastrar</button>
                                </div>
                                <div class="mb-0">
                                    <a href="#" class="text-2 fs-foot">Termos de uso</a>
                                    <a href="#" class="text-2 fs-foot">Privacidade</a>
                                    <a href="#" class="text-2 fs-foot">Fale conosco</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="border-left: 1px var(--bs-color-2) solid;">
                        <div class="card-body">

                            <h1 class="text-start text-transition oswald-font fw-500">Escolha uma foto de perfil</h1>
                            <p class="text-start mb-0 text-2 fw-400">Ou ignore por enquanto não carregando nenhuma imagem.</p>
                            <div class="p-3 align-center parent">
                                    <div class="image-upload">
                                        <label for="uploadImage">
                                            <span class="position-absolute translate-middle" id="cam"><i class="bi-camera" ></i></span>
                                        </label>  
                                        <input name="arquivo" id="uploadImage" type="file" accept="image/png, image/jpeg">
                                    </div>
                                <img id="imageSelected" src="img/profile-icon.jpg" width="60%" alt="" class="align-center select-image">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</body>
<script src="js/profileimg.js"></script>
</html>