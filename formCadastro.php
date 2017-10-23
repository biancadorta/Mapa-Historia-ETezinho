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
