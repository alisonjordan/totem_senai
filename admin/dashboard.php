<?php

require __DIR__.'/../vendor/autoload.php';

use \App\Entity\Resposta;

$respostas1 = Resposta::getRespostas1();
$respostas2 = Resposta::getRespostas2();
$respostas3 = Resposta::getRespostas3();
$respostas4 = Resposta::getRespostas4();
$respostas5 = Resposta::getRespostas5();
$respostas6 = Resposta::getRespostas6();
$respostas7 = Resposta::getRespostas7();
$respostas8 = Resposta::getRespostas8();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';