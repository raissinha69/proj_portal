<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados
    $servername = "localhost"; // Endereço do servidor MySQL
    $username = "root"; // Nome de usuário do MySQL
    $password = "senai"; // Senha do MySQL
    $dbname = "proj_portal"; // Nome do banco de dados

    // Cria uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara as variáveis para inserção no banco de dados
    $nome = $_POST['nome'];
    $rm = $_POST['rm'];
    $turma = $_POST['turma'];
    $senha = $_POST['senha'];
  
    // Prepara e executa a query SQL para inserir os dados na tabela
    $sql = "INSERT INTO login_alunos (nome,rm, turma, senha) VALUES ('$nome', '$rm', '$turma', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
    ?>
    <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000); 
    </script>
    <?php
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadas.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Cadastro de Aluno</title>
</head>
<body> 
<div class="container">
            <div class="texts_header">
                <a href="index.html"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
                <a href="login.php"><h2>Aulas</h2></a>
                <a href="#"><h2>Cardápio</h2></a> 
                <a href="intervalo-sesi.html"><h2>Horários</h2></a> 
            </div>
</div>
    <div class="forms">
     <h1>Cadastro de Aluno</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            <input type="text" id="rm" name="rm" placeholder="Digite seu rm" required>
            <input type="text" id="turma" name="turma" placeholder="Digite sua turma" required>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            <input type="submit" id="botao" value="Cadastrar">
        </form>
    </div>
    <footer>
        <div class="footer">
            <p>Para mais informações:</p>
            <p>Contato: 99 999-9999 </p>
            <p>Produzido por: Senai ADS 2024.</p>
            <style>
 .footer {
    width: 100%;
    height: 120px;
    background-color: #b81414;
    margin-top: 305px;
    padding-top: 10px;
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
           
        </div>
    </footer>
</body>
</html>


