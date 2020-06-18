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
* Deve-se incluir o "method" e "action" no "form".
* Para ter êxito, deve-se copiar a pasta (extraída) do CKeditor no servidor.
* O formato das "class" usados abaixo são da referência de bootstrap 4.
===============================================================================  
-->
    <!-- Incluir a construção da "class" - sugestão para nome: container-editor -->
    <div class="container-editor">
        <form action="libphp/update.php" method="POST">
        <label for="">Escolha um menu para editar:</label>
        <select id="titulo" name="titulo" required>
            <option value="home">Home</option>
            <option value="2">Institucional -> Quem somos</option>
            <option value="3">Institucional -> Histórico</option>
            <option value="4">Institucional -> Nossos objetivos</option>
            <option value="5">Projetos e Pesquisa</option>
            <option value="6">Publicações -> Artigos</option>
            <option value="7">Publicações -> Livros</option>
            <option value="8">Publicações -> E-books</option>
            <option value="9">Eventos</option>
            <option value="10">Notícias</option>
            <option value="11">Fale conosco</option>
            <option value="coluna_direita">Coluna lateral direita</option>
        </select>
            <textarea name="texto" required>Digite seu texto aqui!</textarea><br>
            <input type="submit" name="enviar" value="Enviar texto ao banco de dados" class="btn-primary">
        </form>

    </div>
    <!-- Este script faz o link com o arquivo "ckeditor.js" -->
    <script src="../ckeditor/ckeditor.js"></script>

    <!-- Este script faz a relação do js com o objeto do "name" da "textarea" -->
    <script>
        CKEDITOR.replace('texto');
    </script>