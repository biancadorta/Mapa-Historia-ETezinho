<?php 
    session_start();
    if(empty($_SESSION['name']))
        header("location: index.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WARMAP</title>
        <meta charset="UTF-8">
        <!--<link rel="icon" href="nave2.png" type="image/x-icon">-->
        <link rel="stylesheet" href="estilo/style.css">
        <script language="JavaScript" type="text/javascript" src="funcoes/funcoes.js"></script>
        <script src="jquery-3.2.1.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){    
         $("#img").click(function(){              
            $("#menu").toggle();
         }); 

          $(".janela") 
          
          $('#xyw').hover(function(){
                var pagina = "dados.html";
                $('#xyw').load(pagina);
            },
                function(){
                $("#xyw").html(pagina); 
          }); 
    });                  
        
    
  </script>
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
    <a href="#"><img src="imagens/nave2.png" id="img"></a>    
        <ul id="menu">
            <li>Sign in as</li>
            <strong id="user">
                <?php                  
                    $userAtual = $_SESSION['name'];
                    echo  $userAtual;
                ?>
            </strong><br>
            <li><a href="#" id="fav">Favoritos</a></li>
            <li><a href="encerrar.php">Sair</a></li>   
        </ul> 
    
     <style type="text/css">
    
        #menu{position: absolute; width: 150px; background: white; padding: 0; border-radius: 3px;opacity: 1.2; top: 50px; left: 30px; display: none;}

        ul{ text-decoration: none; list-style-type: none;}

        li{color: lightblue;}

        ul li a{color: lightblue; }

        ul li{position: relative;}

        ul li a:hover { background-color: #ccffff; display:block; color: #666666;}

        ul li a:link { text-decoration: none; color:#4d79ff;}

        #img{ position: absolute; height: 35px; top:20px; left: 30px; }

        #user{color: blue;}

    </style>
    
</body>
</html>
