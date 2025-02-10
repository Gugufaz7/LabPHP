<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiras experiencias - Login Page</title>
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
                <a href="licao2.html">Lição 2 - Sintaxe básica do PHP</a>
                <a href="licao3.html">Lição 3 - Trabalhando com variáveis e tipos de dados</a>
                <!-- Adicione mais lições conforme necessário -->
            </div>
            <a href="contactos.html">Contactos</a>
        </div>
    </header>
    <div class="container">
        <h1>Testando um formulario de login com PHP</h1>
        <form method="post" action="" id="l3">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            <input type="submit" value="Login">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $senha = htmlspecialchars($_POST['senha']);
            echo "<div class='dados'>Nome: $nome<br>Senha: $senha</div>";
        }
        ?>
        <p>Explicações:</p>
            <ol>
                <li>O formulário é enviado para a mesma página</li>
                <li>Verifica se o método de requisição é POST</li>
                <li>Obtém os valores dos campos nome e senha</li>
                <li>Exibe os valores obtidos em uma div</li>
                <li>Os valores dos campos são sanitizados usando <code>htmlspecialchars</code> para evitar ataques XSS</li>
                <li>O atributo <code>required</code> nos campos de entrada garante que o usuário preencha os campos antes de enviar o formulário</li>
                <li>O método <code>$_SERVER["REQUEST_METHOD"]</code> é usado para verificar o método de requisição HTTP</li>
                <li>Os dados do formulário são acessados usando o array superglobal <code>$_POST</code></li>
            </ol>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>