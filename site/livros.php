<?php
    include_once('top.php');
?>

<div class="bg-margin-top">

<div class="jumbotron p-4 p-md-5 text-white rounded-post bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Livros</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">Livros</h2>

        <?php 
          include_once ('libphp/select.php'); 
          livrosSe();
        ?>

    </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

<?php

  include_once('coluna-direita.php');

  include_once('footer.php');

?>