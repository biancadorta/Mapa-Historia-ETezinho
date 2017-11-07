<?php
    session_start();
?>
<html>
<head>
<title></title>
</head>
<script src="funcoes/jquery-3.2.1.js"></script>
<script type="text/javascript">

 /*function successfully()
 {
    setTimeout("window.location='principal.php'",1000);
 }*/

 function mostrarErro()
 {
    $(document).ready(function(){
    $("#msg").fadeIn(10);
   });

 }
 </script>
 </html>

 <?php 
 if(isset($_POST['nome']) && isset($_POST['senha'])){
    require_once('Classes/ConexaoBD.class.php');
    $con = new ConexaoBD();  
    
    $login = $_POST['nome'];
    $senha = md5($_POST['senha']);

    $result = sqlsrv_query($con->con,"SELECT nome, senha FROM usuario WHERE nome='$login' and senha='$senha'");

    //$row    = sqlsrv_num_rows($result);

  if($dados = sqlsrv_fetch_array($result))
  {

      $_SESSION['name'] = $login;
      $_SESSION['pwd'] = $senha;
      
      echo "lala";
      header("Location:principal.php");   
     
  }
     
  else
  {
      echo "<script> mostrarErro(); </script>";
  }
}
 ?>

 <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
  <script src="jquery-3.2.1"></script>
</head>
<body>
<form action="index.php" method="post">
  <div class="card">
  <div class="field">
    <span class="header">Login</span>
    <div class="form-group">
        <input type="text" required="required"  maxlength="30" name="nome">
        <label for="input" class="control-label" name="nome">user</label><i class="bar"></i>
    </div>
    <div class="form-group">
        <input type="password" required="required" name="senha" maxlength="16">
        <label for="input" class="control-label" name="senha">password</label><i class="bar"></i>
    </div>
    <div class="button-container">
        <input type="submit" class="button" value="Logar">
    </div>
    <div id="msg">
       Usuário ou senha inválidos
    </div>
    <a href="Cadastrar.class.php"> Criar Conta </a>
    <style>
      #msg{color: #ff4d4d; position: absolute; left: 13%; top: 57%; display: none;}
        
      a{ color: #f58209; position: absolute; top: 95%; left: 35%; }
    </style>
  </div>
</div>
</form> 
</body>
</html>
