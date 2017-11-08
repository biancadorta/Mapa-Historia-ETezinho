var objCanvas=null;
var objContexto=null;
var imgFundo = new Image();
    imgFundo.src = "imagens/mapinha1.png";
var imgAlien = new Image();
	imgAlien.src = "imagens/alien.png";

var xAlien=420;
var yAlien=500;

function Iniciar(){
    objCanvas   = document.getElementById("meuCanvas");
    objContexto = objCanvas.getContext("2d");
    objContexto.drawImage(imgFundo,0,0);

    abrir();

    AtualizaTela();
}

function abrir(){
    $("#infos").slideUp(0);
    $("#janelaInfo").slideUp(0);
    $("#professores").slideUp(0);              
}

function AtualizaTela(){
    objContexto.drawImage(imgFundo,0,0);
    objContexto.drawImage(imgAlien,xAlien,yAlien);
}

function TesteTecla(event){
    var x = event.keyCode;
    MovimentoAlien(x);
}

function VerificaMapa(qualMapa){

	switch(qualMapa){
		case 1: {imgFundo.src = "imagens/mapinha1.png";
                $(".BolaDaLinha4").css("left","297px");
                } break;
		case 2: {imgFundo.src = "imagens/mapinha2.png";
                $(".BolaDaLinha4").css("left","-34px");
                } break;
		case 3: {imgFundo.src = "imagens/mapinha3.png";
                $(".BolaDaLinha4").css("left","-360px");
                } break;
	}

	AtualizaTela();
}

function MovimentoAlien(direcao){
    switch (direcao){
    case 38:yAlien=(yAlien - 10); break;
    case 37:xAlien=(xAlien - 10); break;
    case 39:xAlien=(xAlien + 10); break;
    case 40:yAlien=(yAlien + 10); break;
    }

    if(xAlien>1570)
        xAlien=20
    else
    if(xAlien<20)
        xAlien=1570;

    if(yAlien>760)
        yAlien=0
    else
    if(yAlien<0)
        yAlien=760;

    if(xAlien==20){
        $("#janelaInfo").slideDown(1000);
        lblX.innerHTML=xAlien;
        lblY.innerHTML=yAlien;
    }

    AtualizaTela();
}

function clicouRosa(){
    $(".rosa").toggleClass('open');
    $("#professores").slideToggle(1000);
}

function clicouMenu(){
    $("#infos").slideToggle(500);
    $(".menu").toggleClass('open');
}

function clicouJanela(){
    $("#janelaInfo").slideDown(1000);
}

function clicouInfo(){
    $("#janelaInfo").slideUp(1000);
}