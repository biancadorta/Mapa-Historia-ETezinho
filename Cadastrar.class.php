<?php
  require_once('formCadastro.php');   
  require_once('Classes/ConexaoBD.class.php');


   if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email']))
   {

    try{
      $objCon = new ConexaoBD();

      echo "Oi";

      $nome  = $_POST['nome'];
      $senha = md5($_POST['senha']);
      $email = $_POST['email'];

      $result = $objCon->insertUsuario($nome,$senha,$email);
      

     if($result == true){     
         header("Location:index.php"); 
         }     
     else{
         echo "<center>Erro no cadastro</center>";
        }
      
    }
    catch(Exception $e)
    {echo "Deu catch";}
  }
?>
