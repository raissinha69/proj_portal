
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="texts_header">
                <a href="index.html"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
                <a href="#"><h2>Aulas</h2></a>
                <a href="cardapio.html"><h2>Cardápio</h2></a> 
                <a href="intervalo-sesi.html"><h2>Horários</h2></a> 
            </div>
        </div>
    </header>

    <div class="cont_login">
        <div class="conteudo_login">
            <h1>Faça login para ver suas aulas!</h1>
            <form action="logado.php" method="post">
                <input type="text" id="rm" name="rm" placeholder="Digite seu RM">
                <select name="turma" id="turma">
                <option value="label">Selecione sua turma:</option>

                <option value="1A">1A</option>
                <option value="1B">1B</option>
                <option value="2A">2A</option>
                <option value="2B">2B</option>
                <option value="3A">3A</option>
                <option value="3B">3B</option>

                </select>        

                  <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                <a href="cadastro.php" class="link" >Ainda não tem conta? Cadastre-se agora!</a>
                <input type="submit" id="botao" value="Entrar">
            </form>

        </div>
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
    margin-top: 215px;
    padding-top: 10px;
}
            </style>
           
        </div>
    </footer>

    </body>
</html>