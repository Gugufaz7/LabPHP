<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 8 - Arrays</title>
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
        <h1>Lição 8 - Arrays</h1>
        
        <h2>Arrays Indexados</h2>
        <p>Arrays indexados são arrays onde cada elemento é acessado por um índice numérico.</p>
        <?php
        $frutas = array("Maçã", "Banana", "Laranja", "Uva");
        echo "<p>Frutas: " . implode(", ", $frutas) . "</p>";
        echo "<p>A primeira fruta é: " . $frutas[0] . "</p>";
        ?>

        <h2>Arrays Associativos</h2>
        <p>Arrays associativos são arrays onde cada elemento é acessado por uma chave associativa.</p>
        <?php
        $idades = array("João" => 25, "Maria" => 30, "Pedro" => 35);
        echo "<p>Idades:</p><ul>";
        foreach ($idades as $nome => $idade) {
            echo "<li>$nome: $idade anos</li>";
        }
        echo "</ul>";
        ?>

        <h2>Arrays Multidimensionais</h2>
        <p>Arrays multidimensionais são arrays que contêm outros arrays como elementos.</p>
        <?php
        $produtos = array(
            array("Nome" => "Notebook", "Preço" => 3000, "Quantidade" => 10),
            array("Nome" => "Mouse", "Preço" => 50, "Quantidade" => 100),
            array("Nome" => "Teclado", "Preço" => 100, "Quantidade" => 50)
        );
        echo "<p>Produtos:</p><ul>";
        foreach ($produtos as $produto) {
            echo "<li>" . $produto["Nome"] . " - Preço: R$" . $produto["Preço"] . " - Quantidade: " . $produto["Quantidade"] . "</li>";
        }
        echo "</ul>";
        ?>

        <h2>Operações com Arrays</h2>
        <p>Algumas operações comuns com arrays em PHP:</p>
        <?php
        // Adicionar um elemento ao final do array
        array_push($frutas, "Abacaxi");
        echo "<p>Frutas após adicionar Abacaxi: " . implode(", ", $frutas) . "</p>";

        // Remover o último elemento do array
        array_pop($frutas);
        echo "<p>Frutas após remover o último elemento: " . implode(", ", $frutas) . "</p>";

        // Ordenar o array
        sort($frutas);
        echo "<p>Frutas ordenadas: " . implode(", ", $frutas) . "</p>";
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>