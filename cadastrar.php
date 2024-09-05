<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Login</title>
    
</head>
<body>
    <header>
      <div class="container">
          <div class="texts_header">
            <a href="#"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
            <a href="home.html"> <h2>Home</h2></a> 
            <a href="login.php"><h2>Aulas</h2></a>
            <a href="cardapio.html"><h2>Cardápio</h2></a>
            <a href="cadastrar.php"><h2>Login</h2></a>
            <a href="#"><h2>Horários</h2></a> 

          </div>
      </div>
  </header>
    <div class="page">
        <form method="POST" class="formLogin">
            <img src="">
            <h3>Login acesso cardápio</h3>
            <label for="loginFuncionario">Login</label>
            <input name="loginFuncionario" type="text" placeholder="Digite seu login" autofocus="true"/>
            <label for="senhaFuncionario">Senha</label>
            <input name="senhaFuncionario" type="password" placeholder="Digite sua senha "/>
            <input type="submit" value="Login" class="btn"/>
        </form>
    </div>
    <footer>
      <div class="footer">
          <p>Para mais informações:</p>
          <p>Contato: 99 999-9999 </p>
          <p>Produzido por: Senai ADS 2024.</p>
      </div>
    </footer>

</body>
</html>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["loginFuncionario"];
    $senha = $_POST["senhaFuncionario"];

    $sql = "SELECT * FROM cadastrarusuario WHERE login = '$login' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($result->num_rows > 0) {
        header("Location: cardapioForm.php");
        exit();
        }
        
    } else {
        
        echo "Login falhou. Verifique seu ID de Funcionário e senha.";
    }
}

$conn->close();
?>