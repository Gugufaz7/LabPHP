<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 13 - Programação Orientada a Objetos</title>
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
        <h1>Lição 13 - Programação Orientada a Objetos</h1>
        
        <h2>Definindo Classes e Criando Objetos</h2>
        <p>Classes são modelos para criar objetos. Elas definem propriedades e métodos que os objetos criados a partir da classe terão.</p>
        <?php
        class Pessoa {
            public $nome;
            public $idade;

            public function __construct($nome, $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
            }

            public function apresentar() {
                return "Olá, meu nome é $this->nome e eu tenho $this->idade anos.";
            }
        }

        $pessoa1 = new Pessoa("Augusto", 30);
        echo "<p>" . $pessoa1->apresentar() . "</p>";
        ?>

        <h2>Herança</h2>
        <p>Herança permite que uma classe herde propriedades e métodos de outra classe.</p>
        <?php
        class Funcionario extends Pessoa {
            public $cargo;

            public function __construct($nome, $idade, $cargo) {
                parent::__construct($nome, $idade);
                $this->cargo = $cargo;
            }

            public function apresentar() {
                return parent::apresentar() . " Eu sou um $this->cargo.";
            }
        }

        $funcionario1 = new Funcionario("Maria", 25, "Desenvolvedora");
        echo "<p>" . $funcionario1->apresentar() . "</p>";
        ?>

        <h2>Encapsulamento</h2>
        <p>Encapsulamento é o conceito de esconder os detalhes internos de uma classe e permitir o acesso apenas através de métodos públicos.</p>
        <?php
        class ContaBancaria {
            private $saldo;

            public function __construct($saldoInicial) {
                $this->saldo = $saldoInicial;
            }

            public function depositar($quantia) {
                $this->saldo += $quantia;
            }

            public function sacar($quantia) {
                if ($quantia <= $this->saldo) {
                    $this->saldo -= $quantia;
                } else {
                    echo "<p>Saldo insuficiente.</p>";
                }
            }

            public function obterSaldo() {
                return $this->saldo;
            }
        }

        $conta = new ContaBancaria(1000);
        $conta->depositar(500);
        $conta->sacar(200);
        echo "<p>Saldo atual: " . $conta->obterSaldo() . "</p>";
        ?>

        <h2>Polimorfismo</h2>
        <p>Polimorfismo permite que métodos em diferentes classes tenham o mesmo nome, mas comportamentos diferentes.</p>
        <?php
        class Animal {
            public function fazerSom() {
                return "Som de animal";
            }
        }

        class Cachorro extends Animal {
            public function fazerSom() {
                return "Latido";
            }
        }

        class Gato extends Animal {
            public function fazerSom() {
                return "Miau";
            }
        }

        $cachorro = new Cachorro();
        $gato = new Gato();
        echo "<p>Cachorro: " . $cachorro->fazerSom() . "</p>";
        echo "<p>Gato: " . $gato->fazerSom() . "</p>";
        ?>
    </div>
    <footer>
        <p>&copy; Augusto Dala Faztudo</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>