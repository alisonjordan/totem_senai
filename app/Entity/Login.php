<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Login{

  /**
   * Identificador único do usuário
   * @var integer
   */
  public $id;

  /**
   * Usuário
   * @var string
   */
  public $usuario;

  /**
   * Senha
   * @var string
   */
  public $senha;




   //FUNÇÃO PARA CHAMAR LOGIN
  public static function logar($user, $password){
    return (new Database('usuarios'))->realizarLogin($user, $password);
  }


   
 

}