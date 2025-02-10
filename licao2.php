<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalando o Xampp / Usando o Xampp via browser</title>
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
        <h1>1. Instalando o Xampp</h1>
        <p>Para instalar o Xampp, siga os seguintes passos:</p>
        <ol>
            <li>Acesse o site <a href="https://www.apachefriends.org/pt_br/index.html">https://www.apachefriends.org/pt_br/index.html</a></li>
            <li>Clique no botão de download</li>
            <li>Execute o instalador</li>
            <li>Escolha os componentes que deseja instalar</li>
            <li>Escolha a pasta de instalação</li>
            <li>Conclua a instalação</li>
        </ol>
        <h1>2. Usando o Xampp via browser</h1>
        <p>Para acessar o Xampp via browser, siga os seguintes passos:</p>
        <ol>
            <li>Abra o Xampp Control Panel</li>
            <li>Clique em Start para os módulos Apache e MySQL</li>
            <li>Abra o seu navegador e digite <a href="http://localhost">http://localhost</a></li>
            <li>Pronto! Você está pronto para começar a desenvolver com PHP</li>
        </ol>
        <h1>3. Acessar o Servidor a partir do Celular ou Outros Dispositivos</h1>

        <p>Verifique o IP local do seu computador:</p>

        <h4>No Windows: Abra o Prompt de Comando e execute o comando:</h2>

        <ol>
            <li>ipconfig</li>
            <li>Procure pelo IPv4 Address (algo como 192.168.x.x).</li>
        </ol>

        <h4>No Ubuntu: Abra o Terminal e execute:</h4>

        <ol>
            <li>ip a</li>
            <li>Procure pelo endereço inet na interface de rede (algo como 192.168.x.x).</li>
        </ol>

        <p>Acessar o servidor a partir de outro dispositivo (celular, outro computador, etc):</p>

        <ol>
            <li>No navegador do celular ou de outro dispositivo, digite o endereço IP local do seu computador seguido da porta do servidor. Por exemplo, se o IP do seu computador for 192.168.1.10 e você estiver usando a porta 5500, acesse:</li>
            <p><a href="http://192.168.1.10:5500">http://192.168.1.10:5500</a></p>
        </ol>

        <h1>4. Dicas adicionais:</h1>

        <ol>
            <li>Certifique-se de que o dispositivo e o computador estão na mesma rede Wi-Fi.</li>
            <li>Verifique se o firewall não está bloqueando a porta 5500 (No Windows, você pode precisar configurar o firewall para permitir a porta 5500).</li>
            <li>Teste localmente no próprio computador antes de tentar acessar pelo celular. Abra o navegador e digite:</li>
            <li>http://127.0.0.1:5500</li>
        </ol>

        <p>Com isso, você conseguirá iniciar o servidor PHP em ambos os sistemas e acessar de qualquer dispositivo na mesma rede.</p>

    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>   
    <script src="scripts.js"></script>
</body>
</html>