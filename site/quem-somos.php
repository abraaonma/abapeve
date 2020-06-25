<?php
    include_once('top.php');
?>

<div class="bg-margin-top">

<div class="jumbotron p-4 p-md-5 text-white rounded-post bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Nossa identidade</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">Quem somos</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>A <strong>ASSOCIAÇÃO BRASILEIRA DE PREVENÇÃO DA EVASÃO NA EDUCAÇÃO BÁSICA E SUPERIOR</strong>, denominada ABAPEVE, é uma associação civil de natureza educacional, assistencial e cultural, pessoa jurídica de direito privado, sem fins lucrativos ou econômicos, fundada em __/__/____ e tem por finalidade promover ações voltadas para a prevenção da evasão e o estímulo à permanência escolar e conclusão dos estudos, regendo-se pelo presente Estatuto e pela legislação que lhe for aplicável. </p>
        <p>A ABAPEVE nasceu da Rede de Pesquisa Ibero-Americana sobre Educação Profissional e Evasão Escolar, a qual resultou de deliberações finais constituídas no I Colóquio Internacional sobre Educação Profissional e Evasão Escolar no ano de 2009, ratificadas posteriormente II Colóquio Internacional sobre Educação Profissional e Evasão Escolar ocorrido em agosto de 2011, na Faculdade de Educação, da Universidade Federal de Minas Gerais, situada em Belo Horizonte, Minas Gerais, Brasil. </p>
        <p>Este evento contou com a participaçã o de representantes de instituições de países latinos, como o México, Uruguai, Chile, Argentina, Colômbia e também participaram efetivamente dois professores de instituições européias, Itália e Espanha, representantes do <i> Research Network on Youth Education and Training (NYET) </i>, no qual o Brasil também está representado. O objetivo foi, sobretudo, analisar os processos de evasão escolar na educação técnica profissional de nível médio, debater os resultados de investigações realizadas sobre essa temática e identificar perspectivas para a realização de um trabalho conjunto, envolvendo investigadores que dão prioridade a esse objeto de estudo, na região ibero-americana, com a finalidade de formar uma Rede Integrada de Trabalho.</p>
        
        <?php 
          include_once ('libphp/select.php'); 
          quemSomosSe();
        ?>

      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

<?php

  include_once('coluna-direita.php');

  include_once('footer.php');

?>