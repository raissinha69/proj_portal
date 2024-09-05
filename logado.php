<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulas.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Aulas</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="texts_header">
                <a href="index.html"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
                <a href="login.php"><h2>Aulas</h2></a>
                <a href="cardapio.html"><h2>Cardápio</h2></a> 
                <a href="intervalo-sesi.html"><h2>Horários</h2></a> 
            </div>
        </div>
    </header>
    
    <div class="container_aulas">
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

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $conn->set_charset("utf8mb4");

        $login_sucesso = false;


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $rm = $_POST['rm'] ?? '';
            $senha = $_POST['senha'] ?? '';
            $turma = $_POST['turma'] ?? '';


            if (!empty($rm) && !empty($senha) && !empty($turma)) {

                $sql = $conn->prepare("SELECT nome FROM login_alunos WHERE rm = ? AND senha = ? AND turma = ?");
                $sql->bind_param("sss", $rm, $senha, $turma);
                $sql->execute();
                $result = $sql->get_result();

                if ($result && $result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    $login_sucesso = true;
                    echo "<h1 style='color: #fff; font-family: Lucida Sans; font-size: 24px; font-weight: 700; margin-left: ; padding-top:50px'>Bem-vindo, " . htmlspecialchars($user['nome']) . " da turma " . htmlspecialchars($turma) . "!</h1>";

                    switch ($turma) {
                        case '1A':
                            $imagem = 'aula1a.jpg';
                            break;
                        case '1B':
                            $imagem = 'aula1b.jpg';
                            break;
                        case '2A':
                            $imagem = 'aula2a.jpg';
                            break;
                        case '2B':
                            $imagem = 'aula2b.jpg';
                            break;
                        case '3A':
                            $imagem = 'aula3a.jpg';
                            break;
                        case '3B':
                            $imagem = 'aula3b.jpg';
                            break;
                        default:
                            $imagem = 'aulas.jpg'; 
                            break;
                    }
                } else {
                    echo "<p style='color: #fff; font-family: Lucida Sans; font-size: 18px; margin-left: 25px'>RM, senha ou turma incorretos.</p>";
                }

                $sql->close();
            } else {
                echo "<p style='color: white; font-family: Lucida Sans; font-size: 18px; margin-left: 25px'>Por favor, preencha todos os campos.</p>";
                
            }
        }

        if ($login_sucesso): ?>

            <div class="descr">
                <h1 class="descricao">Agora, estudantes do Sesi/Senai têm acesso fácil e rápido às suas aulas. Tudo ao seu alcance, com apenas alguns cliques!</h1>
                <img id="clickableImage" class="img_aulas" src="imgs/<?php echo $imagem; ?>" alt="Aulas">
            </div>
            
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>

            <div class="saiba">
                <h2>Clique na imagem para que ela se expanda.</h2>
            </div>
            <script>
                var modal = document.getElementById("myModal");

                var img = document.getElementById("clickableImage");
                var modalImg = document.getElementById("img01");

                img.onclick = function(){
                    modal.style.display = "flex";
                    modalImg.src = this.src;
                }

                var span = document.getElementsByClassName("close")[0];
                span.onclick = function() { 
                    modal.style.display = "none";
                }
            </script>

        <?php endif;

        $conn->close();
        ?>
    </div>
</body>
</html>
