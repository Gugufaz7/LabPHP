<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 11 - Manipulação de Arquivos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="gitperfil.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="h-left">
            <a href="index.php"><img src="gitperfil.ico" alt="Ícone do Perfil"></a>
        </div>
        <div class="h-right">
            <a href="index.php">Home</a>
            <a href="#" id="licoes-link">Lições</a>
            <div class="dropdown" id="licoes-dropdown">
                <a href="licao1.html">Lição 1 - Introdução ao PHP</a>
                <a href="licao2.php">Lição 2 - Sintaxe básica do PHP</a>
                <a href="licao3.php">Lição 3 - Trabalhando com variáveis e tipos de dados</a>
                <!-- Adicione mais lições conforme necessário -->
            </div>
            <a href="contactos.html">Contactos</a>
        </div>
    </header>
    <div class="container">
        <h1>Lição 11 - Manipulação de Arquivos</h1>
        
        <h2>Abrindo e Fechando Arquivos</h2>
        <p>Para abrir um arquivo em PHP, usamos a função <code>fopen</code>. Para fechar um arquivo, usamos a função <code>fclose</code>.</p>
        <?php
        $arquivo = fopen("exemplo.txt", "w");
        if ($arquivo) {
            echo "<p>Arquivo aberto com sucesso.</p>";
            fclose($arquivo);
            echo "<p>Arquivo fechado com sucesso.</p>";
        } else {
            echo "<p>Erro ao abrir o arquivo.</p>";
        }
        ?>

        <h2>Escrevendo em Arquivos</h2>
        <p>Para escrever em um arquivo, usamos a função <code>fwrite</code>.</p>
        <?php
        $arquivo = fopen("exemplo.txt", "w");
        if ($arquivo) {
            $texto = "Olá, Mundo!";
            fwrite($arquivo, $texto);
            fclose($arquivo);
            echo "<p>Texto escrito no arquivo com sucesso.</p>";
        } else {
            echo "<p>Erro ao abrir o arquivo.</p>";
        }
        ?>

        <h2>Lendo Arquivos</h2>
        <p>Para ler um arquivo, usamos a função <code>fread</code>.</p>
        <?php
        $arquivo = fopen("exemplo.txt", "r");
        if ($arquivo) {
            $conteudo = fread($arquivo, filesize("exemplo.txt"));
            fclose($arquivo);
            echo "<p>Conteúdo do arquivo: $conteudo</p>";
        } else {
            echo "<p>Erro ao abrir o arquivo.</p>";
        }
        ?>

        <h2>Verificando a Existência de Arquivos e Diretórios</h2>
        <p>Para verificar se um arquivo ou diretório existe, usamos a função <code>file_exists</code>.</p>
        <?php
        if (file_exists("exemplo.txt")) {
            echo "<p>O arquivo exemplo.txt existe.</p>";
        } else {
            echo "<p>O arquivo exemplo.txt não existe.</p>";
        }

        if (file_exists("diretorio_exemplo")) {
            echo "<p>O diretório diretorio_exemplo existe.</p>";
        } else {
            echo "<p>O diretório diretorio_exemplo não existe.</p>";
        }
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>