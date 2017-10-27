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

    <h1>WARMAP</h1>
    
    <center>
    <canvas id="meuCanvas" width="1606" height="798" class="distribution-map">
    </canvas>

    <div id="divDasJanelas">
        <div class="janela"  name="janela" id="xyw"><img src="imagens/ponto.png"></div>
        <div class="janela2" name="janela"><img src="imagens/ponto.png"></div>
        <div class="janela3" name="janela"><img src="imagens/ponto.png"></div>
        <div class="janela4" name="janela"><img src="imagens/ponto.png"></div>
        <div class="janela5" name="janela"><img src="imagens/ponto.png"></div>
        <div class="janela6" name="janela"><img src="imagens/ponto.png"></div>
        <div class="janela7" name="janela"><img src="imagens/ponto.png"></div>
    </div>

    <div id="divDaLinhaDoTempo">
        <img src="imagens/bolinha1.png" class="BolaDaLinha1" name="bolas" onclick="VerificaMapa(1);">
        <img src="imagens/bolinha1.png" class="BolaDaLinha2" name="bolas" onclick="VerificaMapa(2);">
        <img src="imagens/bolinha1.png" class="BolaDaLinha3" name="bolas" onclick="VerificaMapa(3);">
        <img src="imagens/bolinha2.png" class="BolaDaLinha4" name="bolas" onclick="VerificaMapa('qualMapa');">
    </div>

    <img src="imagens/linhaDoTempo.png" id="linha">
    </center>

    <script type="text/javascript">
      $('#xyw').hover(function(){
            var pagina = "dados.html";
            $('#xyw').load(pagina);
        },
            function(){
            $("#xyw").html(pagina);
      });

      $('#xyw').mouseout(function(){
            window.location.reload();            
      });
  </script>

</body>
</html>
