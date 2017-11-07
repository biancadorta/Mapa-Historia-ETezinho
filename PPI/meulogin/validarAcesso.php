<?php

    $host = 'regulus';



   //require_once "Classes/ConexaoBD.class.php"; //Usar require, pois preciso de tais classes para a execucao dos metodos
  // require_once "Classes/Usuario.class.php";

    if (isSet($_POST['button']))
    {
      $login = $_POST['nome'];
      $senha = $_POST['senha'];

          // Fazer o select no BD
       $consulta = "SELECT * FROM Usuario where nome='$login' and senha='$senha'";

       $dados = sqlsrv_query($);

      if(!empty($dados)) //Quer dizer que há um usuario com os respectivos dados
      {
         $_SESSION['usuario'] = $dados[0]['login'];

          header("Location:meuProjetinho/index.html");
      }

    else {
        //echo "Acesso negado.";
        header('Location:index.php?usuario=NOK');

    }
  }

 ?>
