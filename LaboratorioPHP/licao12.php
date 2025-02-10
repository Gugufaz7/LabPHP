<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 12 - Sessões e Cookies</title>
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
        <h1>Lição 12 - Sessões e Cookies</h1>
        
        <h2>Sessões</h2>
        <p>Sessões permitem que você armazene informações do usuário em variáveis de sessão, que podem ser acessadas em várias páginas.</p>
        <?php
        // Iniciar uma sessão
        session_start();

        // Definir variáveis de sessão
        $_SESSION["usuario"] = "Augusto";
        $_SESSION["email"] = "augusto@example.com";

        echo "<p>Variáveis de sessão definidas.</p>";

        // Acessar variáveis de sessão
        echo "<p>Usuário: " . $_SESSION["usuario"] . "</p>";
        echo "<p>Email: " . $_SESSION["email"] . "</p>";

        // Destruir a sessão
        session_destroy();
        echo "<p>Sessão destruída.</p>";
        ?>

        <h2>Cookies</h2>
        <p>Cookies são pequenos arquivos que o servidor armazena no computador do usuário. Eles podem ser usados para armazenar informações do usuário entre visitas.</p>
        <?php
        // Definir um cookie
        setcookie("usuario", "Augusto", time() + (86400 * 30), "/"); // 86400 = 1 dia

        echo "<p>Cookie definido.</p>";

        // Acessar um cookie
        if(isset($_COOKIE["usuario"])) {
            echo "<p>Usuário do cookie: " . $_COOKIE["usuario"] . "</p>";
        } else {
            echo "<p>Cookie não definido.</p>";
        }

        // Excluir um cookie
        setcookie("usuario", "", time() - 3600, "/");
        echo "<p>Cookie excluído.</p>";
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>