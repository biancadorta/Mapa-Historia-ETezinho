<!DOCTYPE html>
<html>
    <head>
        <title>WARMAP</title>
        <meta charset="UTF-8">
        <link rel="icon" href="nave2.png" type="image/x-icon">
        <link rel="stylesheet" href="estilo/style.css">
        <script language="JavaScript" type="text/javascript" src="funcoes/funcoes.js"></script>
        <script src="funcoes/jquery-3.2.1.js"></script>
    </head>
<body onload="Iniciar();" onkeydown="TesteTecla(event);">
    <h1><label id="lblX">WARMAP</label><label id="lblY">WARMAP</label></h1>

    <div id="menu" class="menu" onclick="clicouMenu();"><img src="imagens/nave3.png"></div>
    <div id="infos"></div>
    
    <center>
    <canvas id="meuCanvas" width="1606px" height="798px" top="100px">
    </canvas>

    <div id="divDaLinhaDoTempo">
        <img src="imagens/bolinha1.png" class="BolaDaLinha1" name="bolas" onclick="VerificaMapa(1);">
        <img src="imagens/bolinha1.png" class="BolaDaLinha2" name="bolas" onclick="VerificaMapa(2);">
        <img src="imagens/bolinha1.png" class="BolaDaLinha3" name="bolas" onclick="VerificaMapa(3);">
        <img src="imagens/bolinha2.png" class="BolaDaLinha4" name="bolas" onclick="VerificaMapa('qualMapa');">
    </div>
        <img src="imagens/linhaDoTempo.png" id="linha">

    <div id="principal" class="principal">
        <img src="imagens/rosaVentos.png" id="rosa" class="rosa" onclick="clicouRosa();">

        <div id="janelaInfo" onclick="clicouInfo();"></div>
        <div id="professores"></div>

        <img src="imagens/ponto.png" id="janela1" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela2" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela3" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela4" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela5" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela6" onclick="clicouJanela();">
        <img src="imagens/ponto.png" id="janela7" onclick="clicouJanela();">
    </div>    
    </center>
</body>
</html>
