<?php
    // Conectar com o banco de dados
    include_once('conectar.php');

    // Fazer a inclusão do título do menu e do texto do menu
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto']
    $query = 'INSERT INTO pg_menu (titulo_menu, texto_menu) VALUES (:titulo, :texto)';
    $inserir = $pdo->prepare($query);
    $inserir->bindValue(":titulo", $titulo);
    $inserir->bindValue(":texto", $texto);
    $inserir->execute();

    if($inserir){
        echo "Dado inserido com sucesso!";
    }else{
        echo "ERRO: algo aconteceu com a TAG option!";
    }

?>