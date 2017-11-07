<?php

 class Usuario {

    private $login = '';
    private $senha = '';

  public function __construct($l,$s)
  {
    $this->login = $l;
    $this->senha = $s;
  }
  public function getLogin()
  {
    return $this->login;
  }
  public function getSenha()
  {
    return $this->senha;
  }
  public function setLogin($l2)
  {
    $this->login = $l2;
  }
  public function setSenha($s2)
  {
    $this->senha = $s2;
  }
  public function validarAcesso(.)  // Para validar entrar em contato com o BD
  {
      $obj_con = new ConexaoBD();

     //Rodar o select no BD
      $obj_con->select("select * from Usuario where nome='".$this->login."' and senha='".$this->senha."' ");

      $status = $obj_con->exec();

      return $status;
  }
}
 ?>
