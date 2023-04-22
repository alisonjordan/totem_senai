<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar resposta');

use \App\Entity\Resposta;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A RESPOSTA
$obResposta = Resposta::getResposta($_GET['id']);

//VALIDAÇÃO DA RESPOSTA
if(!$obResposta instanceof Resposta){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['resposta1'],$_POST['resposta2'],$_POST['resposta3'],$_POST['resposta4'],$_POST['resposta5'],$_POST['resposta6'],$_POST['resposta7'],$_POST['resposta8'])){

    $obResposta->resposta1    = $_POST['resposta1'];
    $obResposta->resposta2    = $_POST['resposta2'];
    $obResposta->resposta3    = $_POST['resposta3'];
    $obResposta->resposta4    = $_POST['resposta4'];
    $obResposta->resposta5    = $_POST['resposta5'];
    $obResposta->resposta6    = $_POST['resposta6'];
    $obResposta->resposta7    = $_POST['resposta7'];
    $obResposta->resposta8    = $_POST['resposta8'];
  $obResposta->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';