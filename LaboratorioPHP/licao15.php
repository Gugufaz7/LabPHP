<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 15 - Integração com Banco de Dados</title>
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
        <h1>Lição 15 - Integração com Banco de Dados</h1>
        
        <h2>Conectando ao Banco de Dados</h2>
        <p>Para conectar ao banco de dados MySQL, usamos a função <code>mysqli_connect</code>.</p>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "meu_banco";

        // Criar conexão
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Verificar conexão
        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
        echo "<p>Conectado com sucesso ao banco de dados.</p>";
        ?>

        <h2>Inserindo Dados</h2>
        <p>Para inserir dados no banco de dados, usamos a função <code>mysqli_query</code> com uma instrução SQL INSERT.</p>
        <?php
        $sql = "INSERT INTO usuarios (nome, email) VALUES ('João', 'joao@example.com')";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Dados inseridos com sucesso.</p>";
        } else {
            echo "<p>Erro ao inserir dados: " . mysqli_error($conn) . "</p>";
        }
        ?>

        <h2>Consultando Dados</h2>
        <p>Para consultar dados no banco de dados, usamos a função <code>mysqli_query</code> com uma instrução SQL SELECT e a função <code>mysqli_fetch_assoc</code> para obter os resultados.</p>
        <?php
        $sql = "SELECT id, nome, email FROM usuarios";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<li>ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum resultado encontrado.</p>";
        }
        ?>

        <h2>Atualizando Dados</h2>
        <p>Para atualizar dados no banco de dados, usamos a função <code>mysqli_query</code> com uma instrução SQL UPDATE.</p>
        <?php
        $sql = "UPDATE usuarios SET email='joao_novo@example.com' WHERE nome='João'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Dados atualizados com sucesso.</p>";
        } else {
            echo "<p>Erro ao atualizar dados: " . mysqli_error($conn) . "</p>";
        }
        ?>

        <h2>Excluindo Dados</h2>
        <p>Para excluir dados no banco de dados, usamos a função <code>mysqli_query</code> com uma instrução SQL DELETE.</p>
        <?php
        $sql = "DELETE FROM usuarios WHERE nome='João'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Dados excluídos com sucesso.</p>";
        } else {
            echo "<p>Erro ao excluir dados: " . mysqli_error($conn) . "</p>";
        }

        // Fechar conexão
        mysqli_close($conn);
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>