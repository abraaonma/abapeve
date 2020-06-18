<?php
/*===========================================================================
 Funções UPDATE em SQL e PHP das páginas dos menus a partir do banco de dados.
 Quantidade: 11
 Tabela: pg_menu (página de menu)
 * Notar o uso de sufixo Up (Update) após o nome das funções
=============================================================================*/

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    
    function quemSomosUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');
        
        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);
        
        // Fazer a alteração do título do menu e do texto do menu
        $query = 'UPDATE pg_menu SET texto_menu=? WHERE id_menu = 2';
        $alterar = $pdo->prepare($query);
        $alterar->execute([$texto]);
        
        /*if($alter){
            header('Location: ../quem-somos.php');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }*/
    }
    function historicoUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a inclusão do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 3";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function nossoObjetivoUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a inclusão do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 4";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function projetosEpesquisasUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 5";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function artigosUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 6";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function livrosUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 7";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function ebooksUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 8";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function eventosUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 9";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function noticiasUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 10";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }
    function faleConoscoUp(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Pega os dados do texto do menu
        $texto = addslashes($_POST['texto']);

        // Fazer a alteração do título do menu e do texto do menu
        $query = "UPDATE pg_menu SET texto_menu=? WHERE id_menu = 11";
        $alter = $pdo->prepare($query);
        $alter->execute([$texto]);

        if($alter){
            header('Location: ../');
        }else{
            echo "ERRO: algo aconteceu com a TAG option!";
        }
    }  
    // ============== Após as funções =====================

    if($titulo == 2)
    {
        quemSomosUp();
        header('Location: ../quem-somos.php');
    }
    if($titulo == 3)
    {
        historicoUp();
        header('Location: ../historico.php');
    }
    if($titulo == 4)
    {
        nossoObjetivoUp();
        header('Location: ../objetivos.php');
    }
    if($titulo == 5)
    {
        projetosEpesquisasUp();
        header('Location: ../pesquisa.php');
    }
    if($titulo == 6)
    {
        artigosUp();
        header('Location: ../artigos.php');
    }
    if($titulo == 7)
    {
        livrosUp();
        header('Location: ../livros.php');
    }
    if($titulo == 8)
    {
        ebooksUp();
        header('Location: ../ebooks.php');
    }
    if($titulo == 9)
    {
        eventosUp();
        header('Location: ../eventos.php');
    }
    if($titulo == 10)
    {
        noticiasUp();
        header('Location: ../noticias.php');
    }
    if($titulo == 11)
    {
        faleConoscoUp();
        header('Location: ../faleconosco.php');
    }
?>