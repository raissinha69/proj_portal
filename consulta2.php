<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssdaconsulta.css">
    <title>consulta</title>
</head>
<body>
    <div class="container">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "controle";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die("Falha na Conexão: " . mysqli_connect_error());
            }


            $query = "SELECT NomeDoAluno, RM, Turma, Data, Horario, NomeDoResponsavel FROM entrada";
            $result_query = $conn->query($query) or die(' Erro na query:' . $query);
            //mysqli_query($query) or die(' Erro na query:' . $query . ' ' . mysqli_error() );


            while ($row = mysqli_fetch_array($result_query)){
                print "<div class='form-group'>";
                print "<label>Nome do aluno:</label>" . $row['NomeDoAluno'];
                print "<label>Registro de matricula:</label>" . $row['RM'];
                print "<label>Turma:</label>" . $row['Turma'];
                print "<label>Data e horário da saida:</label>" . $row['Data']. ", " . $row['Horario'];
                print "<label>Nome do responsável:</label>" . $row['NomeDoResponsavel'];
                print "</div>";
            }
        ?>
    </div>
</body>
</html>