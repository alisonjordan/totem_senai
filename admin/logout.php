<?php



require __DIR__.'/../vendor/autoload.php';

use \App\Entity\Resposta;

session_start();
session_unset();
session_destroy();

header("Location: index.php"); // Redirecionar de volta para a página de login após o log-off
exit();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/sidebar.php';
include __DIR__.'/includes/navbar.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';