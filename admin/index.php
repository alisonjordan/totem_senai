<?php

require __DIR__.'/../vendor/autoload.php';

use \App\Entity\Login;


// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


$obLogin = new Login;
$senhaHash = md5($senha);
// Realizar o login
if ($obLogin->logar($usuario, $senhaHash)) {
    // Autenticação bem-sucedida
     // Faça algo, como redirecionar para o dashboard ou definir uma variável de sessão
     session_start();
     $_SESSION['usuario'] = $usuario;
     header('Location: dashboard.php');
     exit;
 }  else {
    // Login falhou
    echo '<div class="alert alert-danger">Usuário ou senha inválidos!</div>';
}


}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/login.php';
include __DIR__.'/includes/footer.php';