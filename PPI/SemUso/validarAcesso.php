<?php
  require_once('Classes/ConexaoBD.class.php');

  $objBD = new ConexaoBD();
  //Pegar os dados do formulário
  $nome  = $_POST['nome'];
  $senha = md5($_POST['senha']);

  $sql = "SELECT nome, senha FROM Usuario where nome='$nome' and senha='$senha'";

  $status = sqlsrv_query($objBD->con,$sql);

  if($dados = sqlsrv_fetch_array($status))
  {
     header("Location:meuProjetinho/index.php");
  }
  else
  {
      //header("Location:index.php?Usuario=NOK");
  
  }
?>
