var objCanvas=null;
var objContexto=null;
var imgFundo = new Image();
    imgFundo.src = "imagens/mapinha1.png";
var imgAlien = new Image();
	imgAlien.src = "imagens/alien.png";
var imgRosa = new Image();
    imgRosa.src = "imagens/rosaVentos.png";

var xAlien=425;
var yAlien=500;
var xRosa =120;
var yRosa =640;

function Janela(){
    $("#wyw").html("dados.php");
}

function Iniciar(){
    objCanvas   = document.getElementById("meuCanvas");
    objContexto = objCanvas.getContext("2d");
    objContexto.drawImage(imgFundo,0,0);

    AtualizaTela();
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

function AtualizaTela(){
	objContexto.drawImage(imgFundo,0,0);
	objContexto.drawImage(imgAlien,xAlien,yAlien);
    objContexto.drawImage(imgRosa,xRosa,yRosa);
}

function MovimentoAlien(direcao){
    switch (direcao){
    case 38:yAlien=(yAlien - 10); break;
    case 37:xAlien=(xAlien - 10); break;
    case 39:xAlien=(xAlien + 10); break;
    case 40:yAlien=(yAlien + 10); break;
    }

    if(xAlien>1570)
        xAlien=25
    else
    if(xAlien<25)
        xAlien=1570;

    if(yAlien>760)
        yAlien=0
    else
    if(yAlien<0)
        yAlien=760;

    if(xAlien!=0)
        $("#janela").addClass(".janela:hover");

    AtualizaTela();
    
    if(xAlien==435){
        $('#xyw').addClass('.janela:hover');
    }
}