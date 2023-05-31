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




  <div class="d-flex justify-content-center">
  <h2>Aguarde o formulário ser liberado <br> para avaliar nosso atendimento...</h2>
  
  
  </div>

      

  

</main>