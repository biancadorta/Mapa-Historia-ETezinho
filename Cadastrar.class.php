  <html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
      <link rel="stylesheet" href="css/style.css">
    </head>
  <body>
  <form action="Cadastrar.class.php" method="post">
    <div class="card">
    <div class="field">
      <span class="header">Cadastro</span>
      <div class="form-group">
      <input type="text" required="required"  maxlength="30" name="nome">
        <label for="input" class="control-label" name="nome">username</label><i class="bar"></i>
      </div>
      <div class="form-group">
        <input type="password" required="required" name="senha" maxlength="16">
        <label for="input" class="control-label" name="senha">password</label><i class="bar"></i>
      </div>
      <div class="form-group">
        <input type="text" required="required" maxlength="40" name="email">
        <label for="input" class="control-label" name="email">email</label><i class="bar"></i>
      </div>
      <div class="button-container">
        <input type="submit" class="button" value="Cadastrar" onclick="">
      </div>
  </html>
<?php
   require_once("Classes/ConexaoBD.class.php");
   $objConBD = new ConexaoBD();

   //Pegar os dados digitados no form acima
   if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email']))
   {
     $nome  = $_POST['nome'];
     $senha = $_POST['senha'];
     $email = $_POST['email'];

     $sql = "INSERT INTO usuario VALUES('$email','$senha','$nome')";

     $result = sqlsrv_query($objConBD->con,$sql);

     if($result == true)
     {
      // echo "Sucesooooooooo!";
        header("Location:index.php");
     }
     else {
        echo "<center>Erro no cadastro</center>";
     }

 }

 ?>
