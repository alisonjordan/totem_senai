<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Resposta');

use \App\Entity\Resposta;
$obResposta = new Resposta;

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
  $obResposta->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';