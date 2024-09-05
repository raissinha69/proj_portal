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
        <a href="#"><h2>Horários</h2></a> 
    </div>
</div>

<div class="forms">
    <?php
    $showForm = true; // Controle para exibir o formulário

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "senai";
        $dbname = "proj_portal";

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

        // Verifica se a turma selecionada é válida
        if ($turma == "label") {
            echo "<div class='sucesso'>
                    <h1>Por favor, selecione uma turma válida.</h1>
                  </div>";
        } else {
            // Prepara e executa a query SQL para inserir os dados na tabela
            $sql = "INSERT INTO login_alunos (nome, rm, turma, senha) VALUES ('$nome', '$rm', '$turma', '$senha')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='sucesso'>
                        <h1>Cadastro realizado com sucesso!</h1>
                      </div>";
                $showForm = false; // Oculta o formulário após o sucesso

                // Redireciona para a página de login após 3 segundos
                echo "<script>
                        setTimeout(function() {
                            window.location.href = 'login.php';
                        }, 3000);
                      </script>";
            } else {
                echo "<div class='sucesso'>
                        <h1>Erro ao cadastrar: " . $conn->error . "</h1>
                      </div>";
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
    ?>

    <?php if ($showForm): ?>
        <h1>Cadastro de Aluno</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            <input type="text" id="rm" name="rm" placeholder="Digite seu RM" required>
            <select name="turma" id="turma" required>
                <option value="label">Selecione sua turma:</option>
                <option value="1A">1A</option>
                <option value="1B">1B</option>
                <option value="2A">2A</option>
                <option value="2B">2B</option>
                <option value="3A">3A</option>
                <option value="3B">3B</option>
            </select>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            <input type="submit" id="botao" value="Cadastrar">
        </form>
    <?php endif; ?>
</div>
</body>
</html>
