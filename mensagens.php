<?php

 session_start();
  //print_r($_SESSION);

  if((!isset($_SESSION['username']) == true) && (!isset($_SESSION['senha']) == true)){
    header('Location: login.php');
  }
  
  $user = $_SESSION['username'];
  $tag = $_SESSION['usertag'];
  $imgperfil = $_SESSION['imgperfil'];

  if(file_exists('arquivos/' . $imgperfil))
  {
    //Arquivo existe.
  } 
  else
  {
    //Arquivo não existe.
    $imgperfil = 'logofundo.png';
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
    <script src="js/colors.js" defer></script>
    <script src="js/postmodal.js" defer></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Social / Mensagens</title>
</head>
<body class="bg-5 oswald-font" id="body" theme-dicender=>
    <nav class="navbar fw-300 navbar-expand-lg bg-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="menu.php"><img src="img/icon-glass.png" class="logo" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>   
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="menu.php"><p class="text-clean fs-5 m-2 fw-500">Menu</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notificacoes.php"><p class="text-clean fs-5 m-2 fw-500">Notificações</p></a>
              </li>

              <li class="nav-item dropdown m-2">
                <div class="bg-5 profile row mx-0 rounded-5 container">
                  <div class="h-100 col-md-3 p-0">
                    <img style="max-height: 80%;" class="w-auto position-relative top-50 end-0 translate-middle-y rounded-circle" src="arquivos/<?php echo $imgperfil ?>" alt="">
                  </div>
                  <div class="h-100 col-md-7 px-0">
                    <h6 class="m-0 text-1 mt-1"><?php echo "<?> $user </?>"?></h6>
                    <p class="m-0 text-clean" style="font-size: 0.8rem;"><?php echo "@<?> $tag </?>" ?></p>
                  </div>
                    <div class="h-100 col-md-2 position-relative dropdown">
                      <i class="bi-three-dots-vertical position-absolute start-50 translate-middle text-1" style="font-size: 1.5rem; top: 45%;" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="config"></i>
                      <ul class="dropdown-menu dropdown-menu-end dropdown drop-menu" id="dropdownPerfil">
                        <li>
                          <a class="dropdown-item switch-item" id="">
                            <i class="bi-person-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Meu perfil</p>
                          </a>
                        </li>
                        <li class="dropdown-item dropstart switch-item" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi-brush-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Meus temas</p>
                            <ul class="dropdown-menu dropdown drop-menu" style="margin-right: -3% !important; box-shadow: 0 10px 40px #000;" id="colorList">
                              <li>
                                <a class="dropdown-item switch-item" id="default"><button class="switch-color" id="defaultcolor">
                                    <img src="img/001.svg" class="switch-img" alt="">
                                  </button> 
                                  <p class="text-2 text-center m-1" >Dicenders Padrão</p>
                                  <button class="light-btn float-end bg-3" id="lightCheck"><i class=" text-5" id="lightModeIcon"></i></button> 
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="coloryellow"><button class="switch-color" id="yellow">
                                    <img src="img/001yellow.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Deserto Escaldante</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorgreen"><button class="switch-color" id="green">
                                    <img src="img/001green.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Floresta Amazônica</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorred"><button class="switch-color" id="red">
                                    <img src="img/001red.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Pináculo Ígneo</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorblack"><button class="switch-color" id="black">
                                    <img src="img/001black.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Cripta Soturna</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorwhite"><button class="switch-color" id="white">
                                    <img src="img/001white.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Terror Glacial</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="blueyellow"><button class="switch-color" id="blueNyellow">
                                    <img src="img/001bny.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Estrondo Atroz</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="purpleyellow"><button class="switch-color" id="purpNyellow">
                                    <img src="img/001pny.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Bosque Convexo</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="milesgradient"><button class="switch-color" id="blackspider">
                                    <img src="img/001miles.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Aranha Escarlate</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="coffeetheme"><button class="switch-color" id="coffee">
                                    <img src="img/001coffee.svg" class="switch-img" alt="">
                                  </button>
                                  <p class="text-2 text-center m-1" >Ruína dos Ernos</p>
                                </a>
                              </li>
                            </ul>
                        </li>
                        <li>
                          <a class="dropdown-item switch-item" href="login.php" id="">
                            <i class="bi-person-fill-add text-2 fs-5"></i>
                            <p class="text-2 m-1">Adicionar conta</p>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item switch-item" href="configuracao.html" id="">
                            <i class="bi-gear-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Configurações</p>
                          </a>
                        </li>
                        <li><hr></li>
                        <li><a href="logout.php" class="dropdown-item" id=""><p class="text-danger m-1">Logout</p></a></li>
                      </ul>
                    </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 border-end border-2 bc-2" style="min-height: 100vh;">
                <div class="">
                    <p class="text-2 text-center align-middle fw-400 fs-5 mt-social">Comunidades</p>
                    <hr class="mx-small">
                    <a href="#"><button class="comm-btn"><i class="bi-globe-americas"></i></button></a>
                    <a href="#"><button class="comm-btn"><i class="bi-globe-americas"></i></button></a>
                    <a href="#"><button class="comm-btn"><i class="bi-globe-americas"></i></button></a>
                    <a href="#"><button class="comm-btn"><i class="bi-plus-circle"></i></button></a>
                </div>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-6 border-end border-start border-2 bc-2">

            </div>
            <div class="col-md-2">
                <div class="mb-3 parent">
                    <input type="text" class="form-control bg-glass text-2 bs-0 mt-social" id="input_search" name="inputsearch" autocomplete="off" aria-describedby="emailHelp" placeholder="Busca" style="padding-left: 2rem; border-radius: 30px;">
                    <i class="bi-search text-2" id="search"></i>
                </div>
                <div class="container-fluid">
                    <a href="social.php"><button class="option-media align-center" ><i class="bi-house-door-fill" style="display: inline-block; margin-right: 4%;"></i><p class="inter-font fw-600" style="display: inline-block;">Página inicial</p></button></a>
                    <a href="mensagens.php"><button class="option-media align-center" id="message"><i class="bi-chat-left-text-fill" style="display: inline-block; margin-right: 4%;"></i><p class="inter-font fw-600" style="display: inline-block;">Mensagens</p></button></a>
                    <a href="notificacoes.php"><button class="option-media align-center"><i class="bi-bell-fill" style="display: inline-block; margin-right: 4%;"></i><p class="inter-font fw-600" style="display: inline-block;">Notificações</p></button></a>
                </div>
                <div class=" mt-3">
                  <button type="submit" id="publicarBtn" class="btn inter-font fw-600 text-post btn-glass w-100" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 50px;">Publicar</button>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content position-absolute bg-glass text-2">
                    <div class="modal-header border-2 bc-2">
                      <button type="button" class="btn-close bi-x-lg text-center align-middle" data-bs-dismiss="modal" aria-label="Close" style="color: var(--bs-color-2);"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="h-100 position-absolute mt-4 p-0">
                            <img style="max-height: 50px;" class="w-auto position-relative top-0 translate-middle-y rounded-circle" src="arquivos/<?php echo $imgperfil ?>" alt="">
                          </div>
                        </div>
                        <div class="col-md-10 ps-0">
                          <textarea autofocus tabindex="1" class="form-control text-2 bg-glass border-0" wrap="wrap" id="postTextArea" rows="3" placeholder="No que está pensando?"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer border-2 bc-2">
                      <div class="position-absolute float-start start-0 mx-3">
                        <div class="dropdown-center list-inline-item mx-1">
                          <i class="bi-emoji-smile image-icon-post" id="emojiSelectorIcon" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          </i>
                          <ul class="dropdown-menu drop drop-menu"  style="width: 400px; overflow-y: scroll; height: 50vh;">
                            <li class="emoji-selector" id="emojiSelector">
                              <div class="input-container">
                                  <input id="emojiSearch" type="text" class="bg-glass text-2 position-relative top-0" placeholder="Procurar...">
                              </div>
                              <ul id="emojiList" class="emoji-list">

                              </ul>
                          </ul>
                        </div>
                      
                        <div class="image-upload list-inline-item mx-1">
                          <label for="uploadImage">
                              <span class="">
                                <i class="bi-image image-icon-post"></i>
                              </span>
                          </label>  
                          <input id="uploadImage" type="file" accept="image/*">
                        </div>
                      </div>
                      <button type="button" class="btn btn-glass float-end">Finalizar postagem</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> 
    </div>
      
    <div class="footer"></div>
</body>
</html>