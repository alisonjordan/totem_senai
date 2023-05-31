<?php
 session_start();

 // Verificar se o usuário está logado
 if (!isset($_SESSION['usuario'])) {
     // Redirecionar para a página de login se o usuário não estiver logado
     if ($_SERVER['REQUEST_URI'] !== '/login') {
         header("Location: /index");
         exit();
     }
 } else {
     // Redirecionar para a página de dashboard se o usuário estiver logado
     if ($_SERVER['REQUEST_URI'] === '/login') {
         header("Location: /dashboard");
         exit();
     }
 }

require __DIR__.'/../vendor/autoload.php';

use \App\Entity\Resposta;
use \App\Entity\Login;
$error = '';

$respostas1 = Resposta::getRespostas1();
$respostas2 = Resposta::getRespostas2();
$respostas3 = Resposta::getRespostas3();
$respostas4 = Resposta::getRespostas4();
$respostas5 = Resposta::getRespostas5();
$respostas6 = Resposta::getRespostas6();
$respostas7 = Resposta::getRespostas7();
$respostas8 = Resposta::getRespostas8();

// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dados do formulário
    $flag = $_POST['flag'];

    $obLogin = new Login;
    
    // Realizar o login
    if ($obLogin->liberarForm($flag)) {
        
        
        
        header('location: dashboard.php?status=success');
        
        
         exit;
     }  

}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/sidebar.php';
include __DIR__.'/includes/navbar.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';