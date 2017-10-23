<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
<form action="validarAcesso.php" method="post">
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
    <a href="Cadastrar.class.php" target="corpo"> Criar Conta </a>
    <style>
      a
      {
          color: #f58209;
          position: absolute;
          top: 95%;
          left: 35%;
      }
    </style>
  </div>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
