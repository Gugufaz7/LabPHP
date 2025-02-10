<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 6 - Condicionais</title>
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
            // Exemplo 1 - Condicional if
            echo "<h2>Votos - Condicional if</h2>";
            $pessoa1 = array(
                "nome" => "Augusto",
                "idade" => 17,
                "voto" => true
            );
            $pessoa2 = array(
                "nome" => "Maria",
                "idade" => 16,
                "voto" => false
            );
            $pessoa3 = array(
                "nome" => "João",
                "idade" => 18,
                "voto" => true
            );
            $pessoa4 = array(
                "nome" => "Ana",
                "idade" => 19,
                "voto" => true
            );
            $pessoa5 = array(
                "nome" => "Carlos",
                "idade" => 45,
                "voto" => false
            );
            $pessoa6 = array(
                "nome" => "Marta",
                "idade" => 50,
                "voto" => true
            );
            $pessoa7 = array(
                "nome" => "Pedro",
                "idade" => 71,
                "voto" => true
            );
            $pessoa8 = array(
                "nome" => "Rita",
                "idade" => 22,
                "voto" => true
            );
            $pessoa9 = array(
                "nome" => "Sara",
                "idade" => 73,
                "voto" => true
            );
            $pessoa10 = array(
                "nome" => "Vasco",
                "idade" => 34,
                "voto" => true
            );

            $pessoas = [$pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5, $pessoa6, $pessoa7, $pessoa8, $pessoa9, $pessoa10];

            $eleitores = 0;

            foreach ($pessoas as $pessoa) {
                if ($pessoa["voto"] && $pessoa["idade"] >= 18 && $pessoa["idade"] <= 70) {
                    $eleitores++;
                }
            }

            foreach ($pessoas as $pessoa) {
                if ($pessoa["voto"] && $pessoa["idade"] >= 18 && $pessoa["idade"] <= 70) {
                    echo "<p>{$pessoa["nome"]} pode votar. </p>";
                } else {
                    echo "<p>{$pessoa["nome"]} não pode votar.</p>";
                }
            }

            echo "<p>O número de eleitores é $eleitores</p>";

            // Exemplo 2 - Condicional switch
            echo "<h2>Compatibilidade de Hardware - Condicional switch</h2>";

            echo "<form action='licao6.php' method='post'>";
            echo "<input type='number' name='gen' placeholder='digite a GEN do seu dispositivo' max='14'>";
            echo "<select name='genero' id='genero'>";
            echo "<option value='desktop'>Desktop</option>";
            echo "<option value='notebook'>Notebook</option>";
            echo "<option value='palmtop'>Smartphone/Tablet</option>";
            echo "</select>";
            echo "<input type='number' name='processador' placeholder='O seu processador é um Intel Core iX (ex.: i3)' max='9'>";
            echo "<input type='number' name='ram' placeholder='Digite a quantidade de RAM do seu dispositivo'>";
            echo "<input type='number' name='armazenamento' placeholder='Quanto espaco livre tem o seu dispositivo?'>";
            echo "<select name='graficos' id='graficos'>";
            echo "<option value='intel uhd graphics'>Intel UHD Graphics</option>";
            echo "<option value='intel uhd graphics 200'>Intel UHD Graphics 200</option>";
            echo "<option value='intel uhd graphics 400'>Intel UHD Graphics 400</option>";
            echo "<option value='intel uhd graphics 600'>Intel UHD Graphics 600</option>";
            echo "<option value='intel uhd graphics 700'>Intel UHD Graphics 700</option>";
            echo "<option value='intel uhd graphics 770'>Intel UHD Graphics 770</option>";
            echo "</select>";
            echo "<select name='sistema' id='sistema'>";
            echo "<option value='windows 10 x64'>Windows 10</option>";
            echo "<option value='windows 11 x64'>Windows 11</option>";
            echo "<option value='macos x64'>macOS</option>";
            echo "<option value='linux x64'>Linux</option>";
            echo "<option value='android x86'>Android</option>";
            echo "</select>";
            echo "<select name='gpu' id='gpu'>";
            echo "<option value='nvidia geforce mx250'>NVIDIA GeForce MX250</option>";
            echo "<option value='nvidia geforce gtx 720'>NVIDIA GeForce GTX 720</option>";
            echo "<option value='nvidia geforce rtx 2080'>NVIDIA GeForce RTX 2080</option>";
            echo "<option value='nvidia geforce rtx 4080'>NVIDIA GeForce RTX 4080</option>";
            echo "<option value='nvidia geforce rtx 6600'>NVIDIA GeForce RTX 6600</option>";
            echo "</select>";
            echo "<input type='submit' value='Montar' id='montar'>";
            echo "</form>";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $gen = filter_input(INPUT_POST, 'gen', FILTER_VALIDATE_INT);
                $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
                $processador = filter_input(INPUT_POST, 'processador', FILTER_VALIDATE_INT);
                $ram = filter_input(INPUT_POST, 'ram', FILTER_VALIDATE_INT);
                $armazenamento = filter_input(INPUT_POST, 'armazenamento', FILTER_VALIDATE_INT);
                $graficos = filter_input(INPUT_POST, 'graficos', FILTER_SANITIZE_STRING);
                $sistema = filter_input(INPUT_POST, 'sistema', FILTER_SANITIZE_STRING);
                $gpu = filter_input(INPUT_POST, 'gpu', FILTER_SANITIZE_STRING);
            
                if ($gen === false || $processador === false || $ram === false || $armazenamento === false) {
                    echo "<p>Erro: Dados inválidos enviados no formulário.</p>";
                    exit;
                }
            }

                $compatibilidade = 0;

                $jogos = array(
                    "Fortnite" => 1,
                    "Call Of Duty Black Ops Cold War" => 2,
                    "GTA V" => 3,
                    "Minecraft" => 4,
                    "Among Us" => 5,
                );

                function verificarCompatibilidade($pc, $requisito) {
                    switch ($requisito) {
                        case 2:
                            return ($pc["geracao"] >= 12 && $pc["genero"] == "desktop" && $pc["processador - Intel Core i"] == "9" && $pc["ram"] >= 64 && $pc["armazenamento"] >= 256 && $pc["graficos"] == "intel uhd graphics 770" && $pc["sistema"] == "windows 11 x64" && $pc["gpu"] == "nvidia geforce rtx 6600");
                        case 4:
                            return ($pc["geracao"] >= 9 && $pc["genero"] == "desktop" || $pc["genero"] || "notebook" || $pc["genero"] == "palmtop" && $pc["processador - Intel Core i"] >= "7" && $pc["ram"] >= 16 && $pc["armazenamento"] >= 90 && $pc["sistema"] != "Linux" && $pc["gpu"] == "nvidia geforce rtx 2080" || $pc["gpu"] == "nvidia geforce rtx 4080" || $pc["gpu"] == "nvidia geforce rtx 6600");
                        case 1:
                            return ($pc["geracao"] >= 7 && $pc["genero"] == "desktop" || $pc["genero"] == "notebook" || $pc["genero"] == "palmtop" && $pc["processador - Intel Core i"] >= "5" && $pc["ram"] >= 12 && $pc["armazenamento"] >= 10 && $pc['sistema'] != "Linux" && $pc["gpu"] != "nvidia geforce mx250");
                        case 3:
                            return ($pc["geracao"] >= 5 && $pc["genero"] == "desktop" || $pc["genero"] == "notebook" && $pc["processador - Intel Core i"] >= "3" && $pc["ram"] >= 8 && $pc["armazenamento"] >= 128 && $pc["graficos"] != "intel uhd graphics" && $pc["sistema"] == "windows 10 x64" || $pc["sistema"] == "windows 11 x64" && $pc["gpu"] == "nvidia geforce mx250");
                        case 5:
                            return ($pc["geracao"] >= 3 && $pc["genero"] == "desktop" || $pc["genero"] == "notebook" || $pc["genero"] == "palmtop" && $pc["processador - Intel Core i"] >= "3" && $pc["ram"] >= 2 && $pc["armazenamento"] >= 1);                                
                    default:
                        return false;
                        
                    }
                }
                
                foreach ($jogos as $jogo => $requisito) {
                    if (verificarCompatibilidade($pc, $requisito)) {
                        echo "<p>O computador é compatível com o jogo $jogo.</p>";
                        $compatibilidade++;
                    } else {
                        echo "<p>O computador não é compatível com o jogo $jogo.</p>";
                    }
                }

                echo "<p>O computador é compatível com $compatibilidade jogos.</p>";
            
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>