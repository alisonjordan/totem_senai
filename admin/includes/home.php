<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Formulário liberado!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Algo deu errado!</div>';
        break;
    }
  }

?> 





<!-- Conteúdo principal -->
 <div class="content-wrapper">



            <section class="content">
                
                
                <div class="container-fluid">
                <h4>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h4>
                    
                </div>
            </section>

            <section class="content">

    <div class="text-center">
      
        <div class="col">
        <div class="col-md-12">
        
        <?=$mensagem?>
                <p>
                </div>
        </div>
        
    </div>

    
    
    </section>


    <section class="content">
<form action="" method="post">

<input type="hidden" name="flag" class="form-control" value=1>
    <div class="text-center">
      
        <div class="col">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Liberar formulário para avaliação de atendimento.</button>
                <p>
                </div>
        </div>
        
    </div>

    </form>
    
    </section>





<section class="content">

<div class="container-sm">

<div class="row">

<div class="col">



  <div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 1: Como você avalia a qualidade <br>  do atendimento que recebeu?</span>
    <input type="text" id="excelente1" hidden value=<?php echo $respostas1['Excelente'];?>>
    <input type="text" id="bom1" hidden value=<?php echo $respostas1['Bom'];?>>
    <input type="text" id="regular1" hidden value=<?php echo $respostas1['Regular'];?>>
    <input type="text" id="ruim1" hidden value=<?php echo $respostas1['Ruim'];?>>
    

    <canvas id="myChart"></canvas>
    
  </div>
 
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 2: O atendente foi prestativo e solícito <br>  em ajudar com suas questões e problemas?</span>
    <input type="text" id="excelente2" hidden value=<?php echo $respostas2['Excelente'];?>>
    <input type="text" id="bom2" hidden value=<?php echo $respostas2['Bom'];?>>
    <input type="text" id="regular2" hidden value=<?php echo $respostas2['Regular'];?>>
    <input type="text" id="ruim2" hidden value=<?php echo $respostas2['Ruim'];?>>
    

    <canvas id="myChart2"> </canvas>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 3: O atendente conseguiu responder suas  <br> perguntas e resolver seus problemas de forma satisfatória?</span>
    <input type="text" id="excelente3" hidden value=<?php echo $respostas3['Excelente'];?>>
    <input type="text" id="bom3" hidden value=<?php echo $respostas3['Bom'];?>>
    <input type="text" id="regular3" hidden value=<?php echo $respostas3['Regular'];?>>
    <input type="text" id="ruim3" hidden value=<?php echo $respostas3['Ruim'];?>>
    

    <canvas id="myChart3"> </canvas>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 4: O tempo de espera para <br>  ser atendido foi adequado?</span>
    <input type="text" id="excelente4" hidden value=<?php echo $respostas4['Excelente'];?>>
    <input type="text" id="bom4" hidden value=<?php echo $respostas4['Bom'];?>>
    <input type="text" id="regular4" hidden value=<?php echo $respostas4['Regular'];?>>
    <input type="text" id="ruim4" hidden value=<?php echo $respostas4['Ruim'];?>>
    

    <canvas id="myChart4"></canvas>
  
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 5: O atendimento foi realizado <br> de forma cordial e respeitosa?</span>
    <input type="text" id="excelente5" hidden value=<?php echo $respostas5['Excelente'];?>>
    <input type="text" id="bom5" hidden value=<?php echo $respostas5['Bom'];?>>
    <input type="text" id="regular5" hidden value=<?php echo $respostas5['Regular'];?>>
    <input type="text" id="ruim5" hidden value=<?php echo $respostas5['Ruim'];?>>
    

    <canvas id="myChart5"></canvas>

  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 6: O atendente ofereceu alternativas <br> ou soluções criativas para o seu problema?</span>
    <input type="text" id="excelente6" hidden value=<?php echo $respostas6['Excelente'];?>>
    <input type="text" id="bom6" hidden value=<?php echo $respostas6['Bom'];?>>
    <input type="text" id="regular6" hidden value=<?php echo $respostas6['Regular'];?>>
    <input type="text" id="ruim6" hidden value=<?php echo $respostas6['Ruim'];?>>
    

    <canvas id="myChart6"></canvas>

  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 7: O atendimento atendeu às <br> suas expectativas? </span>
    <input type="text" id="excelente7" hidden value=<?php echo $respostas7['Excelente'];?>>
    <input type="text" id="bom7" hidden value=<?php echo $respostas7['Bom'];?>>
    <input type="text" id="regular7" hidden value=<?php echo $respostas7['Regular'];?>>
    <input type="text" id="ruim7" hidden value=<?php echo $respostas7['Ruim'];?>>
    

    <canvas id="myChart7"> </canvas>

  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 8: Quais as chances de você indicar o centro <br> de formação SENAI, para um amigo ou familiar?</span>
    <input type="text" id="excelente8" hidden value=<?php echo $respostas8['Excelente'];?>>
    <input type="text" id="bom8" hidden value=<?php echo $respostas8['Bom'];?>>
    <input type="text" id="regular8" hidden value=<?php echo $respostas8['Regular'];?>>
    <input type="text" id="ruim8" hidden value=<?php echo $respostas8['Ruim'];?>>
    

    <canvas id="myChart8"></canvas>

  </div>
</div>

</div>


</div>
</div>

</section>

<?php echo $error; ?>



    
   

 </div>

    