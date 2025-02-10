<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio PHP - Completo</title>
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
                <a href="licao4.php">Lição 4 - Data e Hora</a>
                <a href="licao5.php">Lição 5 - Título da Lição</a>
                <a href="licao6.php">Lição 6 - Título da Lição</a>
                <a href="licao7.php">Lição 7 - Título da Lição</a>
                <a href="licao8.php">Lição 8 - Título da Lição</a>
                <a href="licao9.php">Lição 9 - Título da Lição</a>
                <a href="licao10.php">Lição 10 - Título da Lição</a>
                <a href="licao11.php">Lição 11 - Título da Lição</a>
                <a href="licao12.php">Lição 12 - Título da Lição</a>
                <a href="licao13.php">Lição 13 - Título da Lição</a>
                <a href="licao14.php">Lição 14 - Título da Lição</a>
                <a href="licao15.php">Lição 15 - Título da Lição</a>
                <!-- Adicione mais lições conforme necessário -->
            </div>
            <a href="contactos.html">Contactos</a>
        </div>
    </header>
    <div class="content">
        <div class="left">
            <h1>Lições</h1>
            <?php
            // Exemplo de array de lições extraídas do PDF
            $lessons = [
                ['title' => 'Lição 1', 'description' => 'Introdução ao PHP.', 'url' => 'licao1.html'],
                ['title' => 'Lição 2', 'description' => 'Sintaxe básica do PHP.', 'url' => 'licao2.php'],
                ['title' => 'Lição 3', 'description' => 'Trabalhando com variáveis e tipos de dados.', 'url' => 'licao3.php'],
                ['title' => 'Lição 4', 'description' => 'Data e Hora.', 'url' => 'licao4.php'],
                ['title' => 'Lição 5', 'description' => 'Loops.', 'url' => 'licao5.php'],
                ['title' => 'Lição 6', 'description' => 'Condicional.', 'url' => 'licao6.php'],
                ['title' => 'Lição 7', 'description' => 'Comentando seus scripts.', 'url' => 'licao7.php'],
                ['title' => 'Lição 8', 'description' => 'Arrays.', 'url' => 'licao8.php'],
                ['title' => 'Lição 9', 'description' => 'Funções.', 'url' => 'licao9.php'],
                ['title' => 'Lição 10', 'description' => 'Manipulação de Strings.', 'url' => 'licao10.php'],
                ['title' => 'Lição 11', 'description' => 'Manipulação de Arquivos.', 'url' => 'licao11.php'],
                ['title' => 'Lição 12', 'description' => 'Sessões e Cookies.', 'url' => 'licao12.php'],
                ['title' => 'Lição 13', 'description' => 'Programação Orientada a Objetos (POO).', 'url' => 'licao13.php'],
                ['title' => 'Lição 14', 'description' => 'Tratamento de Erros e Exceções.', 'url' => 'licao14.php'],
                ['title' => 'Lição 15', 'description' => 'Integração com Banco de Dados.', 'url' => 'licao15.php'],
                // Adicione mais lições conforme necessário
            ];

            // Loop para exibir as lições
            foreach ($lessons as $lesson) {
                echo '<a href="' . $lesson['url'] . '"><div class="lesson">';
                echo '<h2>' . $lesson['title'] . '</h2>';
                echo '<p>' . $lesson['description'] . '</p>';
                echo '</div></a>';
            }
            ?>
        </div>
        <div class="right">
            <h1>Sobre o Projeto</h1>
            <p>Este projeto é uma apresentação das lições de PHP baseadas no PDF "Laboratorio PHP".</p>
            <p>Aqui você encontrará uma breve descrição de cada lição disponível.</p>
        </div>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>