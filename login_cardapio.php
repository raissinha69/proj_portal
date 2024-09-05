<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="css/cadastro_nutri.css">
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="texts_header">
                <a href="index.html"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
                <a href="login.php"><h2>Aulas</h2></a>
               <a href="#"><h2>Cardápio</h2></a> 
               <a href="intervalo-sesi.html"><h2>Horários</h2></a> 
    
            </div>
        </div>
    </header>
    <div class="cont_login">
        <div class="conteudo_login">
            <h1>Faça login para ver o cardápio!</h1>
            <form action="banco_cardapio.php" method="post">
    <input type="text" id="nome" name="nome" placeholder="Digite seu Nome">
    <input type="password" id="senha" name="senha" placeholder="Digite sua Senha">
    <a href="cadastro.php" class="link">Ainda não tem conta? Cadastre-se agora!</a>
    <input type="submit" id="botao" value="Entrar">
</form>
        </div>
    </div>

    <footer>
        <div class="footer">
            <p>Para mais informações:</p>
            <p>Contato: 99 999-9999 </p>
            <p>Produzido por: Senai ADS 2024.</p>
        </div>
    
        <style>
            .footer {
                background-color: #b81414; /* Cor de fundo para o footer */
                color: #fff;
                text-align: center;
                padding: 10px 0; /* Ajuste o padding conforme necessário */
                position: relative;
                margin-top: 300px;
            }
    
            .footer > p {
                padding-bottom: 5px;
                padding-top: 5px;
                display: flex;
                justify-content: center;
            margin-top: 10px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 13px;
                font-weight: 500;
                color: #fff;
            }
        </style>
    </footer>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Dados de conexão ao MySQL
        $servername = "localhost";
        $username = "root";
        $password = "senai";
        $dbname = "proj_portal";

        // Criar conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Configurar charset
        $conn->set_charset("utf8mb4");

        // Verificar se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os dados do formulário
            $nome = $_POST['nome'] ?? '';
            $senha = $_POST['senha'] ?? '';
            
            // Preparar e executar a consulta SQL
            $sql = $conn->prepare("SELECT nome FROM login_funcionario WHERE nome = ? AND senha = ?");
            $sql->bind_param("ss", $nome, $senha);
            $sql->execute();
            $result = $sql->get_result();

            // Verifique se um usuário foi encontrado
            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc();
                echo "<h1 style='color: #fff; font-family: Lucida Sans; font-size: 24px; font-weight: 700; margin-left: 220px; padding-top:50px'>Bem-vindo, " . htmlspecialchars($user['nome']) . "!</h1>";
            } else {
                // Login falhou
                echo "<p style='color: red; font-family: Lucida Sans; font-size: 18px; margin-left: 25px'>RM de usuário ou senha incorretos.</p>";
            }

            // Fechar a consulta
            $sql->close();
        }

        // Fechar a conexão
        $conn->close();
        ?>
</body>
</html>