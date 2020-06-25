<?php
    include_once('top.php');
?>

<div class="bg-margin-top">

<div class="jumbotron p-4 p-md-5 text-white rounded-post bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Nosso objetivo</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">Objetivos da ABAPEVE</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>A RIMEPES tem como meta agregar pesquisadores e grupos de pesquisa sobre educação profissional de nível médio e evasão escolar, com o objetivo de aprofundar estudos sobre o tema e intensificar o intercâmbio de informações entre os membros da rede no Brasil e em diversos países da Ibero-América. A nossa experiência aliada a de cada país que integra a RIMEPES enriquece o debate e pode contribuir para o desenvolvimento de estratégias e a formulação de políticas públicas que auxiliem a prevenir e combater a evasão escolar.</p>
        
        <?php 
          include_once ('libphp/select.php'); 
          nossoObjetivoSe();
        ?>
                
      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

<?php

  include_once('coluna-direita.php');

  include_once('footer.php');

?>