<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cardapio.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Portal do Estudante</title>
</head>
<body>
  <header>
      <div class="container">
          <div class="texts_header">
            <a href="#"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
            <a href="home.html"> <h2>Home</h2></a> 
            <a href="login.php"><h2>Aulas</h2></a>
            <a href="#"><h2>Cardápio</h2></a> 
            <a href="#"><h2>Horários</h2></a> 
          </div>
      </div>
  </header>

  <section>
    <div class="caixa">
      <div class="titulo">
        <h1>Dias da semana</h1>
        <p id="time"></p>
      </div>

      <!-- tem que repetir os dias da semana mas n quer dizer q ta funcionando (o estilo mais ou menos vai ser assim as comidas vão embaixo do titulo) -->
      <!-- começa aqui a repetição -->

      <button class="accordion">Segunda-Feira</button>
      <div class="accordion-content">
          
          <form action="cardapioForm.php" method="POST">
              <div class="horas">
                  <h1>Café da manhã</h1>
                  <input type="text" name="comida" placeholder="Digite o alimento" required>
                  <input type="hidden" name="refeicao" value="cafeDaManha">
                  <input type="hidden" name="diaSemana" value="1"> <!-- valor é 1 pra segunda-feira (pra terça vai ser valor 2, assim vai) -->
                  <button type="submit">Adicionar</button>
              </div>
          </form>

          <form action="cardapioForm.php" method="POST">
              <div class="horas">
                  <h1>Almoço</h1>
                  <input type="text" name="comida" placeholder="Digite o alimento" required>
                  <input type="hidden" name="refeicao" value="almoco">
                  <input type="hidden" name="diaSemana" value="1">
                  <button type="submit">Adicionar</button>
              </div>
          </form>

          <form action="cardapioForm.php" method="POST">
              <div class="horas">
                  <h1>Café da tarde</h1>
                  <input type="text" name="comida" placeholder="Digite o alimento" required>
                  <input type="hidden" name="refeicao" value="cafeDaTarde">
                  <input type="hidden" name="diaSemana" value="1">
                  <button type="submit">Adicionar</button>
              </div>
          </form>
          
      </div>
      
      <!-- acaba aqui a repetição -->
      
    </div>
  </section>

  <footer>
    <div class="footer">
      <p>Para mais informações:</p>
      <p>Contato: 99 999-9999 </p>
      <p>Produzido por: Senai ADS 2024.</p>
    </div>
  </footer>

  <script src="script.js"></script>
  <script src="cardapio.js"></script>
</body>
</html>
