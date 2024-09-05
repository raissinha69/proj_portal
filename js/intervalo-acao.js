function atualizarTemporizador(alvo, horaAlvo) {
    const agora = new Date();
    const horaAlvoSplit = horaAlvo.split(":");
    const horaAlvoData = new Date(agora.getFullYear(), agora.getMonth(), agora.getDate(), horaAlvoSplit[0], horaAlvoSplit[1], horaAlvoSplit[2]);
    let diferenca = (horaAlvoData - agora) / 1000;

    const horas = Math.floor(diferenca / 3600);
    diferenca = diferenca % 3600;

    const minutos = Math.floor(diferenca / 60);
    const segundos = Math.floor(diferenca % 60);

    const tempoRestante = `${horas.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;

    document.getElementById(alvo).innerHTML = `Tempo restante até ${horaAlvo}: ${tempoRestante}`;
}

setInterval(function() {
    atualizarTemporizador('temporizador1', '10:00:00');
    atualizarTemporizador('temporizador2', '12:30:00');
    atualizarTemporizador('temporizador3', '15:20:00');
    atualizarTemporizador('temporizador4', '16:00:00');
    atualizarTemporizador('temporizador5', '12:20:00');
    atualizarTemporizador('temporizador6', '18:45:00');
}, 1000);





////
var timers = [];

// Função para calcular o tempo restante até um horário específico
function calcularTempoRestante(horaAlvo, idElemento) {
    var agora = new Date();
    var horaAlvoSplit = horaAlvo.split(":");
    var hora = parseInt(horaAlvoSplit[0]);
    var minuto = parseInt(horaAlvoSplit[1]);
    
    var alvo = new Date();
    alvo.setHours(hora, minuto, 0, 0);
    
    var diferenca = alvo.getTime() - agora.getTime();
    
    var segundosRestantes = Math.floor(diferenca / 1000);
    var minutosRestantes = Math.floor(segundosRestantes / 60);
    var horasRestantes = Math.floor(minutosRestantes / 60);
    
    minutosRestantes %= 60;
    segundosRestantes %= 60;
    
    var elementoTempoRestante = document.getElementById(idElemento);
    elementoTempoRestante.innerHTML = horasRestantes + " : " + minutosRestantes + " : " + segundosRestantes;
}

// Função para iniciar o temporizador
function startTimer(timerId) {
    if (!timers.includes(timerId)) {
        timers.push(timerId);
        var timerElement = document.getElementById("temporizador" + timerId);
        timerElement.classList.add('hidden'); // Hide the timer element
    }
}

// Função para parar o temporizador
function stopTimer(timerId) {
    var index = timers.indexOf(timerId);
    if (index !== -1) {
        timers.splice(index, 1);
        var timerElement = document.getElementById("temporizador" + timerId);
        timerElement.classList.remove('hidden'); // Show the timer element
    }
}

// Atualizar o tempo restante a cada segundo
setInterval(function() {
    calcularTempoRestante("10:00", "tempoRestante1");
    calcularTempoRestante("12:30", "tempoRestante2");
    calcularTempoRestante("15:20", "tempoRestante3");
    calcularTempoRestante("16:00", "tempoRestante4");
    calcularTempoRestante("12:20", "tempoRestante5");
    calcularTempoRestante("18:45", "tempoRestante6");

    
    for (var i = 0; i < timers.length; i++) {
        var timerId = timers[i];
        var timerElement = document.getElementById("temporizador" + timerId);
        var timerText = timerElement.querySelector("h3").innerText;
        calcularTempoRestante(timerText, "tempoRestante" + timerId);
    }
}, 1000);

