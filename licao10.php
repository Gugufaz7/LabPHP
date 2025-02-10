<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 10 - Manipulação de Strings</title>
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
        <h1>Lição 10 - Manipulação de Strings</h1>
        
        <h2>Comprimento da String</h2>
        <p>A função <code>strlen</code> retorna o comprimento de uma string.</p>
        <?php
        $texto = "Olá, Mundo!";
        echo "<p>O comprimento da string é: " . strlen($texto) . "</p>";
        ?>

        <h2>Substituição de Substring</h2>
        <p>A função <code>str_replace</code> substitui todas as ocorrências de uma substring dentro de uma string.</p>
        <?php
        $texto = "Olá, Mundo!";
        $novoTexto = str_replace("Mundo", "PHP", $texto);
        echo "<p>Texto original: $texto</p>";
        echo "<p>Texto modificado: $novoTexto</p>";
        ?>

        <h2>Posição de Substring</h2>
        <p>A função <code>strpos</code> encontra a posição da primeira ocorrência de uma substring dentro de uma string.</p>
        <?php
        $texto = "Olá, Mundo!";
        $posicao = strpos($texto, "Mundo");
        echo "<p>A posição da substring 'Mundo' é: $posicao</p>";
        ?>

        <h2>Extração de Substring</h2>
        <p>A função <code>substr</code> retorna uma parte de uma string.</p>
        <?php
        $texto = "Olá, Mundo!";
        $substring = substr($texto, 4, 5);
        echo "<p>A substring extraída é: $substring</p>";
        ?>

        <h2>Conversão para Maiúsculas e Minúsculas</h2>
        <p>As funções <code>strtoupper</code> e <code>strtolower</code> convertem uma string para maiúsculas e minúsculas, respectivamente.</p>
        <?php
        $texto = "Olá, Mundo!";
        $maiusculas = strtoupper($texto);
        $minusculas = strtolower($texto);
        echo "<p>Texto em maiúsculas: $maiusculas</p>";
        echo "<p>Texto em minúsculas: $minusculas</p>";
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>