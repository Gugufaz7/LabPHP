<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 14 - Tratamento de Erros e Exceções</title>
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
        <h1>Lição 14 - Tratamento de Erros e Exceções</h1>
        
        <h2>Tratamento de Erros com try, catch e finally</h2>
        <p>O PHP oferece suporte ao tratamento de exceções usando os blocos <code>try</code>, <code>catch</code> e <code>finally</code>.</p>
        <?php
        function dividir($dividendo, $divisor) {
            if ($divisor == 0) {
                throw new Exception("Divisão por zero.");
            }
            return $dividendo / $divisor;
        }

        try {
            echo "<p>Resultado: " . dividir(10, 2) . "</p>";
            echo "<p>Resultado: " . dividir(10, 0) . "</p>";
        } catch (Exception $e) {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
        } finally {
            echo "<p>Bloco finally executado.</p>";
        }
        ?>

        <h2>Lançando Exceções Personalizadas</h2>
        <p>Você pode criar suas próprias exceções personalizadas estendendo a classe <code>Exception</code>.</p>
        <?php
        class MinhaExcecao extends Exception {
            public function mensagemPersonalizada() {
                return "Erro personalizado: " . $this->getMessage();
            }
        }

        function verificarIdade($idade) {
            if ($idade < 18) {
                throw new MinhaExcecao("Idade menor que 18.");
            }
            return true;
        }

        try {
            verificarIdade(16);
        } catch (MinhaExcecao $e) {
            echo "<p>" . $e->mensagemPersonalizada() . "</p>";
        }
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>