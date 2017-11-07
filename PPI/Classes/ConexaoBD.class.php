<?php
 class ConexaoBD
  {
    //Atributos da classe
    public $con; //Testara a conexao com o BD
    private $stmt; //Recurso de conexao de acordo c
    private $host = 'regulus';
    private $database = 'BDPPI17165';
    private $userName = 'BDPPI17165';
    private $senha = 'BDPPI17165';

    public function __construct() //Inicializa a conexao com  o BD
    {
        $connection = array("Database"=> $this->database, //Com this->Variavel a classe fica mais versatil e mais util
                            "PWD"=> $this->senha,
                            "UID" => $this->userName);
        
        $this->con = sqlsrv_connect($this->host, $connection); //Primeiro parametro: o host e o segundo o array com as informacoes
                                                                     //Retorna true ou false

        if ($this->con == false){       
            exit(print_r(sqlsrv_errors(),true)); //Colocar true para ele retornar a informacao ao inves de so imprimi-la
        }              
    }

    public function __destruct() // Finaliza a conexao com o BD
    { 
        $this->con = null;    //terminando a conexao com o BD
    }

    public function insertUsuario($nome,$senha,$email)
    {
        $insert = "INSERT INTO Usuario Values('$email','$senha','$nome')";
        $stmt = sqlsrv_query($this->con, $insert);
        

        if ($stmt) {
            $this->stmt=$stmt;
        } else {
           // $this->sql_error($insert);
            
           echo "<script language = 'JavaScript'> alert('Já existe um username ou email como este.'); </script>";
        }

        return $stmt;
    }

    public function selectUsuario()
    {
        
    }


  }

 ?>
