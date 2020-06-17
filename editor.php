<!--
Desenvolvido por: Abraão Azevedo
Versão: 1.1.2
Data: 07 de junho de 2020
Contato: abraaonmazevedo@gmail.com
Projeto: Modelo básico de editor de texto para projetos de sites e blogs
===============================================================================
CKEditor
===============================================================================
CKEditor deve ser considerado o editor padrão para projetos.
Aqui está uma formatação simples para um editor de texto.
* Deve-se incluir "class" e/ou "divs" e vincular à folha de estilos (css).
** Deve-se incluir o "method" e "action" no "form".
*** Para ter êxito, deve-se copiar a pasta (extraída) do CKeditor no servidor.
===============================================================================  
-->
    <!-- Incluir a construção da "class" - sugestão para nome: container-editor -->
    <div class="container-editor">
        <form action="">
        <label for="site/libphp/menu.php">Escolha um menu para editar:</label>
        <select id="titulo">
            <option value="home">Home</option>
            <option value="inst_quemsomos">Institucional -> Quem somos</option>
            <option value="inst_historico">Institucional -> Histórico</option>
            <option value="inst_nossoobjetivo">Institucional -> Nossos objetivos</option>
            <option value="projetos">Projetos e Pesquisa</option>
            <option value="pub_artigos">Publicações -> Artigos</option>
            <option value="pub_livros">Publicações -> Livros</option>
            <option value="pub_ebooks">Publicações -> E-books</option>
            <option value="eventos">Eventos</option>
            <option value="noticias">Notícias</option>
            <option value="faleconosco">Fale conosco</option>
            <option value="coluna_direita">Coluna lateral direita</option>
        </select>
            <textarea name="texto">Digite seu texto aqui!</textarea><br>
            <input type="submit" value="Enviar texto ao banco de dados" class="btn-primary">
        </form>
    </div>
    <!-- Este script faz o link com o arquivo "ckeditor.js" -->
    <script src="../ckeditor/ckeditor.js"></script>

    <!-- Este script faz a relação do js com o objeto do "name" da "textarea" -->
    <script>
        CKEDITOR.replace('texto');
    </script>