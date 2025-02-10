<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 9 - Funções</title>
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
        <h1>Lição 9 - Funções</h1>
        
        <h2>Funções Definidas pelo Usuário</h2>
        <p>Funções são blocos de código que podem ser reutilizados em diferentes partes do programa. Elas são definidas usando a palavra-chave <code>function</code>.</p>
        <?php
        function saudacao() {
            echo "<p>Olá, Mundo!</p>";
        }
        saudacao();
        ?>

        <h2>Funções com Parâmetros</h2>
        <p>Funções podem aceitar parâmetros, que são valores passados para a função quando ela é chamada.</p>
        <?php
        function saudacaoPersonalizada($nome) {
            echo "<p>Olá, $nome!</p>";
        }
        saudacaoPersonalizada("Augusto");
        saudacaoPersonalizada("Maria");
        ?>

        <h2>Funções com Valores de Retorno</h2>
        <p>Funções podem retornar valores usando a palavra-chave <code>return</code>.</p>
        <?php
        function soma($a, $b) {
            return $a + $b;
        }
        $resultado = soma(5, 3);
        echo "<p>O resultado da soma é: $resultado</p>";
        ?>

        <h2>Funções Anônimas</h2>
        <p>Funções anônimas, também conhecidas como closures, são funções sem nome que podem ser atribuídas a variáveis e passadas como argumentos para outras funções.</p>
        <?php
        $multiplicacao = function($a, $b) {
            return $a * $b;
        };
        $resultado = $multiplicacao(4, 2);
        echo "<p>O resultado da multiplicação é: $resultado</p>";
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>