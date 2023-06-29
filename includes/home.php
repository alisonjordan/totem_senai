<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Sua resposta foi registrada!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

?>
<main>

<div class="d-flex justify-content-center">

<?=$mensagem?>
  
  
  </div>


<p>

<div class="d-flex justify-content-center">
  <h2>Bem-Vindo ao SENAI!</h2>
  
  
  </div>

  <p>

  <div class="d-flex justify-content-center">
  <h2>Aguarde o formulário ser liberado <br> para avaliar nosso atendimento...</h2>
  
  
  </div>

  <div class="d-flex justify-content-center">
        <img src="css/img/bgsenaitotem.png" alt="AdminLTE Logo" height="420" width="500">
        
        </div>
  

</main>