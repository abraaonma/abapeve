<?php
/*===========================================================================
 Funções SELECT em SQL e PHP das páginas dos menus a partir do banco de dados.
 Quantidade: 11
 Tabela: pg_menu (página de menu)
 * Notar o uso do sufixo "Se" (Select) após o nome das funções 
=============================================================================*/
    function quemSomosSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');
    
        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 2';
        $inserir = $pdo->prepare($query);
        $inserir->execute();
    
        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function historicoSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 3';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function nossoObjetivoSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 4';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function projetosEpesquisasSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 5';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function artigosSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 6';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function livrosSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 7';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function ebooksSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 8';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function eventosSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 9';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function noticiasSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 10';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }
    function faleConoscoSe(){
        // Conectar com o banco de dados
        include_once('conectar.php');

        // Fazer a seleção do texto do menu
        $query = 'SELECT * FROM pg_menu WHERE id_menu = 11';
        $inserir = $pdo->prepare($query);
        $inserir->execute();

        while($row = $inserir->fetch()){
            echo $row['texto_menu'].'<br>';
        }
    }    
?>