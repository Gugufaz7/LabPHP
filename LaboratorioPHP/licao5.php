<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 5 - Loops</title>
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
        <?php
            // Definidor de número de loops
            echo "<form action='licao5.php' method='post'>";
            echo "<input type='number' name='num' placeholder='Insira um número (recomendado: 7; max: 17)' default='7' max='17'>";
            echo "<input type='submit' value='Calcular'>";
            echo "</form>";
            $num = $_POST['num'];
            if ($num == "") {
                $num = 7;
            }

            // Exemplo de loop for
            echo "<h1>Loop for</h1>";
            echo "<ol>";
            for ($i = 0; $i < $num; $i++) {
                echo "<li>Este é o loop número $i</li>";
            }
            echo "</ol>";

            // Exemplo de loop while
            echo "<h1>Loop while</h1>";
            $i = 0;
            echo "<ol>";
            while ($i < $num) {
                echo "<li>Este é o loop número $i</li>";
                $i++;
            }
            echo "</ol>";

            // Exemplo de loop do-while
            echo "<h1>Loop do-while</h1>";
            $i = 0;
            echo "<ol>";
            do {
                echo "<li>Loop n.$i</li>";
                $i++;
            } while ($i < $num);
            echo "</ol>";

            // Exemplo de loop aninhado
            echo "<h1>Loop aninhado</h1>";
            echo "<table>";
            for ($i = 1; $i <= $num; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>$i x $j = " . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // Exemplo de loop foreach
            echo "<h1>Loop foreach <i style='font-size: 10px'>*(Nao incluido na contagem de loops)</i></h1>";

            echo "<form action='licao5.php' method='post'>";
            echo "<input type='color' name='cor1' placeholder='digite um valor rgb)' max='12'>";
            echo "<input type='color' name='cor2' placeholder='digite um valor rgb)' max='12'>";
            echo "<input type='color' name='cor3' placeholder='digite um valor rgb)' max='12'>";
            echo "<input type='submit' value='Colorir' id='colorir'>";
            echo "</form>";
            $color1 = $_POST['cor1'];
            $cor1 = sscanf($color1, "#%02x%02x%02x");
            $color2 = $_POST['cor2'];
            $cor2 = sscanf($color2, "#%02x%02x%02x");
            $color3 = $_POST['cor3'];
            $cor3 = sscanf($color3, "#%02x%02x%02x");
            if ($color1 == "" || $color2 == "" || $color3 == "") {
                $cor1 = array(255, 0, 0);
                $cor2 = array(0, 255, 0);
                $cor3 = array(0, 0, 255);
            }

            $cores = array("cor 1" => $cor1, "cor 2" => $cor2, "cor 3" => $cor3);
            echo "<p>As cores disponíveis são:</p>";
            echo "<ol>";
            foreach ($cores as $nome => $cor) {
                $corHex = sprintf("#%02x%02x%02x", $cor[0], $cor[1], $cor[2]);
                echo "<li style='background-color: $corHex'>$nome</li>";
            }
            echo "</ol>";

        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>