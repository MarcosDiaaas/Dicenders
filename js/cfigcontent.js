var opcoes = document.querySelectorAll("#listBtnConfig li");
const conteudo = document.getElementById("conteudoConfig");
var clicado = '';
for(var i = 0; i < opcoes.length; i++) {
    opcoes[i].addEventListener("click", function (e){
        clicado = this;
        console.log(clicado)
        mudalayoutbotao();
        mudaconteudo();
    })
}

function mudalayoutbotao(){
    if(document.getElementById(clicado.id).querySelector("i").classList.contains('bi-chevron-down')){
        document.getElementById(clicado.id).querySelector("i").classList.replace('bi-chevron-down', 'bi-chevron-up');
    } else{
        document.getElementById(clicado.id).querySelector("i").classList.replace('bi-chevron-up', 'bi-chevron-down');
    }
    
    if(document.getElementById(clicado.id).querySelector("i").classList.contains('bi-chevron-right')){
        document.getElementById(clicado.id).querySelector("i").classList.replace('bi-chevron-right', 'bi-chevron-left');
        document.getElementById(clicado.id).classList.add('config-active');
    } else{
        document.getElementById(clicado.id).querySelector("i").classList.replace('bi-chevron-left', 'bi-chevron-right');
        document.getElementById(clicado.id).classList.remove('config-active');
    }
    //console.log(clicado)
}

//conteudo.innerHTML = FileReader('../index.html');

function mudaconteudo(){
    if(clicado.id == 'infoConta'){
        conteudo.innerHTML = 
        "<p class='text-2' id='textoTeste'>FUNCIONA!</p> <div class='bg-5 text-center'><p class='list-inline-item'>Voce está indo pelo caminho certo</p><img src='img/snow.jpg' style='width:20%;'></img></div>";
        funcaoTeste();
    } else if (clicado.id == 'atividades'){
        conteudo.innerHTML =
        "<p class='text-2'>NOOOSSAAAAAAAAA!</p> <div class='bg-5 text-center'><p class='list-inline-item'>Voce está indo pelo caminho MAIS CERTO AINDA</p><img src='img/bgpurplenyellow.svg' style='width:20%;'></img></div>";
    } else if (clicado.id == 'temas'){
        conteudo.setAttribute('data', 'configpages/temas.html');
       // conteudo.innerHTML = url('configpages/temas.html');
    }
     else if (clicado.id == 'acessibilidade'){
        conteudo.innerHTML =
        "<button class='btn btn-danger align-middle align-center' onclick='desativaaltocontraste()' style='margin-top:50vh;'>Alternar alto-contraste(temporário)</button><p class='text-center' id='paragrafocontraste'>Status do alto contraste (clique no botão para saber):</p>"
     }
}

function funcaoTeste(){
    var testandooo = document.getElementById("textoTeste");
    if (testandooo){
        console.log('isso existe')
    }
}