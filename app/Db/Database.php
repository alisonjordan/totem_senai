<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

  /**
   * Host de conexão com o banco de dados
   * @var string
   */
  const HOST = 'localhost';

  /**
   * Nome do banco de dados
   * @var string
   */
  const NAME = 'totem_senai';

  /**
   * Usuário do banco
   * @var string
   */
  const USER = 'root';

  /**
   * Senha de acesso ao banco de dados
   * @var string
   */
  const PASS = '';

  /**
   * Nome da tabela a ser manipulada
   * @var string
   */
  private $table;

  /**
   * Instancia de conexão com o banco de dados
   * @var PDO
   */
  private $connection;

  /**
   * Define a tabela e instancia e conexão
   * @param string $table
   */
  public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
  }

  /**
   * Método responsável por criar uma conexão com o banco de dados
   */
  private function setConnection(){
    try{
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }
  }

  /**
   * Método responsável por executar queries dentro do banco de dados
   * @param  string $query
   * @param  array  $params
   * @return PDOStatement
   */
  public function execute($query,$params = []){
    try{
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }
  }

  /**
   * Método responsável por inserir dados no banco
   * @param  array $values [ field => value ]
   * @return integer ID inserido
   */
  public function insert($values){
    //DADOS DA QUERY
    $fields = array_keys($values);
    $binds  = array_pad([],count($fields),'?');

    //MONTA A QUERY
    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

    //EXECUTA O INSERT
    $this->execute($query,array_values($values));

    //RETORNA O ID INSERIDO
    return $this->connection->lastInsertId();
  }

  /**
   * Método responsável por executar uma consulta no banco
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @param  string $fields
   * @return PDOStatement
   */
  public function select($where = null, $order = null, $limit = null, $fields = '*'){
    //DADOS DA QUERY
    $where = strlen($where) ? 'WHERE '.$where : '';
    $order = strlen($order) ? 'ORDER BY '.$order : '';
    $limit = strlen($limit) ? 'LIMIT '.$limit : '';

    //MONTA A QUERY
    $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

    //EXECUTA A QUERY
    return $this->execute($query);
  }

  /**
   * Método responsável por executar atualizações no banco de dados
   * @param  string $where
   * @param  array $values [ field => value ]
   * @return boolean
   */
  public function update($where,$values){
    //DADOS DA QUERY
    $fields = array_keys($values);

    //MONTA A QUERY
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //EXECUTAR A QUERY
    $this->execute($query,array_values($values));

    //RETORNA SUCESSO
    return true;
  }

  /**
   * Método responsável por excluir dados do banco
   * @param  string $where
   * @return boolean
   */
  public function delete($where){
    //MONTA A QUERY
    $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

    //EXECUTA A QUERY
    $this->execute($query);

    //RETORNA SUCESSO
    return true;
  }



############ AQUI COMEÇAM AS CONSULTAS PARA GERAÇÃO DE RELATÓRIO ####################################

##PERGUNTA 1: Como você avalia a qualidade do atendimento que recebeu?

  public function countRespostas1($connection) {
    $queryExcelente = "SELECT COUNT(resposta1) as excelente FROM respostas WHERE resposta1 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta1) as bom FROM respostas WHERE resposta1 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta1) as regular FROM respostas WHERE resposta1 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta1) as ruim FROM respostas WHERE resposta1 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 2: O atendente foi prestativo e solícito em ajudar com suas questões e problemas?

  public function countRespostas2($connection) {
    $queryExcelente = "SELECT COUNT(resposta2) as excelente FROM respostas WHERE resposta2 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta2) as bom FROM respostas WHERE resposta2 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta2) as regular FROM respostas WHERE resposta2 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta2) as ruim FROM respostas WHERE resposta2 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 3: O atendente conseguiu responder suas perguntas e resolver seus problemas de forma satisfatória?

  public function countRespostas3($connection) {
    $queryExcelente = "SELECT COUNT(resposta3) as excelente FROM respostas WHERE resposta3 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta3) as bom FROM respostas WHERE resposta3 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta3) as regular FROM respostas WHERE resposta3 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta3) as ruim FROM respostas WHERE resposta3 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 4: O tempo de espera para ser atendido foi adequado?

  public function countRespostas4($connection) {
    $queryExcelente = "SELECT COUNT(resposta4) as excelente FROM respostas WHERE resposta4 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta4) as bom FROM respostas WHERE resposta4 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta4) as regular FROM respostas WHERE resposta4 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta4) as ruim FROM respostas WHERE resposta4 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 5: O atendimento foi realizado de forma cordial e respeitosa?

  public function countRespostas5($connection) {
    $queryExcelente = "SELECT COUNT(resposta5) as excelente FROM respostas WHERE resposta5 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta5) as bom FROM respostas WHERE resposta5 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta5) as regular FROM respostas WHERE resposta5 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta5) as ruim FROM respostas WHERE resposta5 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 6: O atendente ofereceu alternativas ou soluções criativas para o seu problema?

  public function countRespostas6($connection) {
    $queryExcelente = "SELECT COUNT(resposta6) as excelente FROM respostas WHERE resposta6 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta6) as bom FROM respostas WHERE resposta6 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta6) as regular FROM respostas WHERE resposta6 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta6) as ruim FROM respostas WHERE resposta6 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }


  ##PERGUNTA 7: O atendimento atendeu às suas expectativas?

  public function countRespostas7($connection) {
    $queryExcelente = "SELECT COUNT(resposta7) as excelente FROM respostas WHERE resposta7 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta7) as bom FROM respostas WHERE resposta7 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta7) as regular FROM respostas WHERE resposta7 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta7) as ruim FROM respostas WHERE resposta7 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

  ##PERGUNTA 8: Quais as chances de você indicar o centro de formação SENAI, para um amigo ou familiar?

  public function countRespostas8($connection) {
    $queryExcelente = "SELECT COUNT(resposta8) as excelente FROM respostas WHERE resposta8 = 'Excelente'";
    $queryBom = "SELECT COUNT(resposta8) as bom FROM respostas WHERE resposta8 = 'Bom'";
    $queryRegular = "SELECT COUNT(resposta8) as regular FROM respostas WHERE resposta8 = 'Regular'";
    $queryRuim = "SELECT COUNT(resposta8) as ruim FROM respostas WHERE resposta8 = 'Ruim'";
  
    $stmtExcelente =  $this->execute($queryExcelente);
    $stmtBom = $this->execute($queryBom);
    $stmtRegular = $this->execute($queryRegular);
    $stmtRuim = $this->execute($queryRuim);
  
    $excelenteCount = $stmtExcelente->fetch(PDO::FETCH_ASSOC)['excelente'];
    $bomCount = $stmtBom->fetch(PDO::FETCH_ASSOC)['bom'];
    $regularCount = $stmtRegular->fetch(PDO::FETCH_ASSOC)['regular'];
    $ruimCount = $stmtRuim->fetch(PDO::FETCH_ASSOC)['ruim'];
  
    return array(
      'Excelente' => $excelenteCount,
      'Bom' => $bomCount,
      'Regular' => $regularCount,
      'Ruim' => $ruimCount
    );
  }

}