<?php
  $host = 'regulus';
  $username = 'BDPPI17165';
  $senha = 'BDPPI17165';
  $database = 'BDPPI17165';

  $connectionInfo = array("Database" => $database,
                   "PWD" => $senha,
                   "UID" => $username);

  $conexao = sqlsrv_connect($host,$connectionInfo);

  //Pegar os dados do formulário
  $nome  = $_POST['nome'];
  $senha = md5($_POST['senha']);

  $sql = "SELECT nome, senha FROM Usuario where nome='$nome' and senha='$senha'";

  $status = sqlsrv_query($conexao,$sql);

  if($dados = sqlsrv_fetch_array($status))
  {
     header("Location:meuProjetinho/index.php");
  }
  else
  {
    header("Location:index.php?Usuario=NOK");
  }
?>
