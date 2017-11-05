<?php
session_start();
//Conexao com o mysql
$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'trab_ppi';

$conn = mysqli_connect($host, $user, $senha) 
          or die(mysql_error());
        mysqli_select_db($conn,$banco) 
          or die (mysqli_error());
?> 
<html>
<head>
<title></title>
<script src="funcoes/jquery-3.2.1.js"></script>
<script type="text/javascript" >

 function successfully()
 {
    setTimeout("window.location='meuProjetinho/index.php'",1000);

 }

 function mostrarErro()
 {
    $(document).ready(function(){
    $("#msg").fadeIn(10);
   });

 }
</script>
</head>
<body>
<?php
//receber os dados
if(isset($_POST['nome']) && isset($_POST['senha']))
{
  $login = $_POST['nome'];
  $senha = $_POST['senha'];
  
  //$select = "SELECT nome, senha FROM usuario WHERE nome='$login' and senha='$senha'";
  
  $result = mysqli_query($conn,"SELECT nome, senha FROM usuario WHERE nome='$login' and senha='$senha'");

  $row    = mysqli_num_rows($result);

  if($row > 0)
  {
      $_SESSION['name'] = $login;
      $_SESSION['user'] = $senha;  

      echo"<script>successfully();</script>";

  }
  else
  {
      echo "<script> mostrarErro(); </script>";
  }
}
?>
</body>
</html>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script language="JavaScript" type="text/javascript" src="funcoes/functions.js"></script>
    <script src="funcoes/jquery-3.2.1.js"></script>
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
      <input type="password" required="required" name="senha" maxlength="16" id="senha">
      <label for="input" class="control-label" name="senha" id="senha">password</label><i class="bar"></i>
    </div>
    <div class="button-container" >
      <input type="submit" class="button" value="Logar">
    </div>   
   <div id="msg">
      <p>Usuario ou senha inválidos</p>
  </div>
    <a href="Cadastrar.class.php"> Criar Conta </a>
    <style>

      a{color: #f58209; position: absolute; top: 95%; left: 35%;}

      #msg{color: #ff4d4d; position: absolute; left: 13%; top: 50%; display: none;}
    </style>
  </div>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
