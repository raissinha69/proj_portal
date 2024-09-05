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
            <a href="index.html"><img src="imgs/logo_sesi.png" alt="logo" class="logo"></a>
            <a href="login.php"><h2>Aulas</h2></a>
            <a href="cardapio.html"><h2>Cardápio</h2></a>
            <a href="intervalo-sesi.html"><h2>Horários</h2></a>
          </div>
      </div>
  </header>

    <section>
    <div class="caixa">
        <div class="titulo">
            <h1>Dias da semana</h1>
            <p id="time"></p>
        </div>
    </div>

    <!-- Segunda-Feira -->
    <button class="accordion">Segunda-Feira</button>
    <div class="accordion-content">
        <div class="horas">
            <button onclick="editarcardapio('seg_cafe')">Editar</button>
            <div class="alimentos" id="seg_cafe">
                <h1>Café da manhã</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>pão com ovo</p>
                    </div>
                    <div class="linhas">
                        <p>leite com cappuccino</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('seg_almoco')">Editar</button>
            <div class="alimentos" id="seg_almoco">
                <h1>Almoço</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>arroz feijão bobó de frango</p>
                    </div>
                    <div class="linhas">
                        <p>salada de alface crespa, abacaxi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('seg_tarde')">Editar</button>
            <div class="alimentos" id="seg_tarde">
                <h1>Café da tarde</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>suco de abacaxi com casca</p>
                    </div>
                    <div class="linhas">
                        <p>mini pizza tortinha de limão</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Terça-Feira -->
    <button class="accordion">Terça-Feira</button>
    <div class="accordion-content">
        <div class="horas">
            <button onclick="editarcardapio('ter_cafe')">Editar</button>
            <div class="alimentos" id="ter_cafe">
                <h1>Café da manhã</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>leite com cereal</p>
                    </div>
                    <div class="linhas">
                        <p>Pão francês com queijo</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('ter_almoco')">Editar</button>
            <div class="alimentos" id="ter_almoco">
                <h1>Almoço</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>arroz feijão coxinha da asa</p>
                    </div>
                    <div class="linhas">
                        <p>macarrão ao alho e óleo</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('ter_tarde')">Editar</button>
            <div class="alimentos" id="ter_tarde">
                <h1>Café da tarde</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>suco de acerola</p>
                    </div>
                    <div class="linhas">
                        <p>pão de leite com mortadela</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quarta-Feira -->
    <button class="accordion">Quarta-Feira</button>
    <div class="accordion-content">
        <div class="horas">
            <button onclick="editarcardapio('qua_cafe')">Editar</button>
            <div class="alimentos" id="qua_cafe">
                <h1>Café da manhã</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>leite com chocolate</p>
                    </div>
                    <div class="linhas">
                        <p>rosca doce</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('qua_almoco')">Editar</button>
            <div class="alimentos" id="qua_almoco">
                <h1>Almoço</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>arroz feijão strogonoff de carne</p>
                    </div>
                    <div class="linhas">
                        <p>salada de frutas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('qua_tarde')">Editar</button>
            <div class="alimentos" id="qua_tarde">
                <h1>Café da tarde</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>suco de limão</p>
                    </div>
                    <div class="linhas">
                        <p>bisnaguinha geleia melão</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quinta-Feira -->
    <button class="accordion">Quinta-Feira</button>
    <div class="accordion-content">
        <div class="horas">
            <button onclick="editarcardapio('qui_cafe')">Editar</button>
            <div class="alimentos" id="qui_cafe">
                <h1>Café da manhã</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>suco de pêssego</p>
                    </div>
                    <div class="linhas">
                        <p>bolo nutritivo maçã</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('qui_almoco')">Editar</button>
            <div class="alimentos" id="qui_almoco">
                <h1>Almoço</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>arroz nutritivo carne chinesa</p>
                    </div>
                    <div class="linhas">
                        <p>mix de folhas frutas diversas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="horas">
            <button onclick="editarcardapio('qui_tarde')">Editar</button>
            <div class="alimentos" id="qui_tarde">
                <h1>Café da tarde</h1>
                <div class="linha_pai">
                    <div class="linhas">
                        <p>suco de laranja com acerola</p>
                    </div>
                    <div class="linhas">
                        <p>cheese salada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sexta-Feira -->
    <button class="accordion">Sexta-Feira</button>
    <div class="accordion-content">
        <div class="horas">
            <button onclick="editarcardapio('sex_cafe')">Editar</button>
            <div class="alimentos" id="sex_cafe">
                <h1>Café da manhã</h1>
                <div class="
