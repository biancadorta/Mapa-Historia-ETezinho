<?php
  require_once('formCadastro.php');   
  require_once('Classes/ConexaoBD.class.php');


   if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email']))
   {

    try{
      $objCon = new ConexaoBD();
?>
<html>
    <head>
    <script src="funcoes/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        function erroCadastro()
        {
             $(document).ready(function(){        
                $("msgErroCadastro").hide();
             });
        }
    </script>
    </head>
</html>
<?php
      $nome  = $_POST['nome'];
      $senha = md5($_POST['senha']);
      $email = $_POST['email'];

      $result = $objCon->insertUsuario($nome,$senha,$email);
      

     if($result == true){     
         header("Location: index.php"); 
         }     
     else{
         // echo "<script language = 'JavaScript'> alert('Já existe um username ou email como este.'); </script>";
          //header("Location: Cadastrar.class.php");
         echo "<script> erroCadastro();</script>";
        }
      
    }
    catch(Exception $e)
    {echo "Deu catch";}
  }
?>
<html>
<head>
    <style>
        #msgErroCadastro{display: none; color:blueviolet; text-align: center;}
    </style>
</head>    
<body>
    <div id="msgErroCadastro">
        Já existe um username ou email como este.
    </div>
</body>        
</html>
