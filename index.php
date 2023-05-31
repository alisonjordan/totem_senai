<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Resposta;
use \App\Entity\Login;

$login = new Login;


$flag = $login->refreshForm(1);

if($flag == 0){
    header('Refresh: 5');
    
}else{
    header('Location: cadastrar.php');
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';