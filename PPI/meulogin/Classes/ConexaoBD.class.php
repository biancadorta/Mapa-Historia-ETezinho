<?php
 class conexaoBD
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

    if ($this->con === false)
    {
       exit(print_r(sqlsrv_errors(),true)); //Colocar true para ele retornar a informacao ao inves de so imprimi-la
    }
    //return true;
  }
  public function __destruct() // Finaliza a conexao com o BD
  {
    sqlsrv_close($this->con); // sqlsrv-close (Termina com a conexao no BD)
  }

  private function execSQL($consulta) //Metodo private, pois so eu irei usá-lo
   {
      if($consulta === '')
         return false;

      $stmt = sqlsrv_query($this->con, $consulta); //Parametros: valor retornado na conexao do sqlsrv_connect e uma string com o que devera ser executado
                                                   //sqlsrv_query prepara e executa uma consulta.

      if($stmt)//Se o que retornou no sqlsrv_query for que foi executado
      {
         $this->stmt = $stmt;
      }
      else // Se o que retornou foi que nao deu certo, nao foi executado entao
      {
        $this->sql_error($stmt); //Chamar a FUNCAO JA IMPLEMENTADA PARA IDENTIFICAR O ERRO E EXIBI-LO
      }
   }
   public function select($login,$senha)
   {
      $sql = "Select *from Usuario where nome='$login' and senha= '$senha'"; //O ._algo. indica concatenacao em php

      // Executar o metodo para o select no BD
            $this->execSQL($sql);
      //Retorna os dados de quem chamou o metodo
      $dados = ''; // inicializar com cadeia vazia


    while ($linha = sqlsrv_fetch_array($this->stmt,SQLSRV_FETCH_ASSOC))
    { // sqlsrc_feach_array retorna a proxima linha de dados como uma linha de uma matriz
      $dados[] = $linha; // Seu parametro é o valor retornado pelo sqlsrv_query e o tipo da matriz que sera retornada
     }
   }
   public function sql_error($sql)
   {
      echo sqlsrv_error($this->con).'<br>'; // sqlsrv_error retorna erros e informações de aviso sobre a última operação do SQLSRV executada.
      die('error:' .$sql);//imprime uma mensagem e sai do script atual, printara o erro achado no sqlsrv_query
   }

  }
 ?>
