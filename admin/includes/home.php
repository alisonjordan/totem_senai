 <!-- Conteúdo principal -->
 <div class="content-wrapper">
            <section class="content">
                
                
                <div class="container-fluid">
                <h4>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h4>
                    
                </div>
            </section>

<section class="content">

<div class="container-sm">

<div class="row">

<div class="col">



  <div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 1: Como você avalia a qualidade <br>  do atendimento que recebeu?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas1['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas1['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas1['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas1['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 2: O atendente foi prestativo e solícito <br>  em ajudar com suas questões e problemas?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas2['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas2['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas2['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas2['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 3: O atendente conseguiu responder suas  <br> perguntas e resolver seus problemas de forma satisfatória?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas3['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas3['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas3['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas3['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 4: O tempo de espera para <br>  ser atendido foi adequado?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas4['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas4['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas4['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas4['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 5: O atendimento foi realizado <br> de forma cordial e respeitosa?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas5['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas5['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas5['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas5['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 6: O atendente ofereceu alternativas <br> ou soluções criativas para o seu problema?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas6['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas6['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas6['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas6['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 7: O atendimento atendeu às <br> suas expectativas? </span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas7['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas7['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas7['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas7['Ruim'];?></span>
    
  </div>
</div>

</div>

<div class="col">

<div class="info-box bg-senai">
  <span class="info-box-icon"><i class="fa fa-comments"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">PERGUNTA 8: Quais as chances de você indicar o centro <br> de formação SENAI, para um amigo ou familiar?</span>
    <span class="info-box-number"><?php echo "Excelente: " . $respostas8['Excelente'];?></span>
    <span class="info-box-number"><?php echo "Bom: " . $respostas8['Bom'];?></span>
    <span class="info-box-number"><?php echo "Regular: " . $respostas8['Regular'];?></span>
    <span class="info-box-number"><?php echo "Ruim: " . $respostas8['Ruim'];?></span>
   
  </div>
</div>

</div>


</div>
</div>

</section>

<section class="content">

<div class="text-center">
  
    <div class="col">
    <div class="col-md-12">
              <button type="button" class="btn btn-primary disabled">Liberar Questionário</button>
            <p>
            </div>
    </div>
    
</div>

</section>




 </div>

    