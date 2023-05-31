<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Login{

  
   public static function liberarForm($flag){
    return (new Database('flags'))->atualizaFlag($flag);
  }


  public static function refreshForm($flag){
    return (new Database('flags'))->obterFlag($flag);
  }

   //FUNÇÃO PARA CHAMAR LOGIN
public static function logar($user, $password){
    return (new Database('usuarios'))->realizarLogin($user, $password);
  }




   
      
}
 