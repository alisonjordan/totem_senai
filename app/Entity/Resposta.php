<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Resposta{

  /**
   * Identificador único da pergunta
   * @var integer
   */
  public $id;

  /**
   * Resposta 1
   * @var string
   */
  public $resposta1;

  /**
   * Resposta 2
   * @var string
   */
  public $resposta2;

  /**
   * Resposta 3
   * @var string
   */
  public $resposta3;

  /**
   * Resposta 4
   * @var string
   */
  public $resposta4;

  /**
   * Resposta 5
   * @var string
   */
  public $resposta5;

  /**
   * Resposta 6
   * @var string
   */
  public $resposta6;

  /**
   * Resposta 7
   * @var string
   */
  public $resposta7;

  /**
   * Resposta 8
   * @var string
   */
  public $resposta8;

  /**
   * Data de registro da resposta
   * @var string
   */
  public $data;




  /**
   * Método responsável por cadastrar uma nova resposta no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A RESPOSTA NO BANCO
    $obDatabase = new Database('respostas');
    $this->id = $obDatabase->insert([
                                      'resposta1'    => $this->resposta1,
                                      'resposta2'    => $this->resposta2,
                                      'resposta3'    => $this->resposta3,
                                      'resposta4'    => $this->resposta4,
                                      'resposta5'    => $this->resposta5,
                                      'resposta6'    => $this->resposta6,
                                      'resposta7'    => $this->resposta7,
                                      'resposta8'    => $this->resposta8,
                                      'data'         => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a resposta no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('respostas'))->update('id = '.$this->id,[
                                                                'resposta1'    => $this->resposta1,
                                                                'resposta2'    => $this->resposta2,
                                                                'resposta3'    => $this->resposta3,
                                                                'resposta4'    => $this->resposta4,
                                                                'resposta5'    => $this->resposta5,
                                                                'resposta6'    => $this->resposta6,
                                                                'resposta7'    => $this->resposta7,
                                                                'resposta8'    => $this->resposta8,
                                                                'data'         => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir a resposta do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('respostas'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as respostas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getRespostas($where = null, $order = null, $limit = null){
    return (new Database('respostas'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma resposta com base em seu ID
   * @param  integer $id
   * @return Resposta
   */
  public static function getResposta($id){
    return (new Database('respostas'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}