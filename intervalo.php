<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Days+One&family=Dosis:wght@800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<title>Temporizador</title>
</head>
<body>
<h2>Temporizador</h2>
<div id="temporizador1"><?php echo atualizarTemporizador('10:00:00'); ?></div>
<div id="temporizador2"><?php echo atualizarTemporizador('12:30:00'); ?></div>
<div id="temporizador3"><?php echo atualizarTemporizador('15:20:00'); ?></div>
<div id="temporizador4"><?php echo atualizarTemporizador('16:00:00'); ?></div>
<div id="temporizador5"><?php echo atualizarTemporizador('12:20:00'); ?></div>
<div id="temporizador6"><?php echo atualizarTemporizador('18:45:00'); ?></div>



<script>
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
</script>
</body>
</html>
<?php

function atualizarTemporizador($horaAlvo) {
    date_default_timezone_set('UTC');
    $agora = new DateTime();
    $horaAlvoData = new DateTime(date('Y-m-d') . ' ' . $horaAlvo);
    $diferenca = $horaAlvoData->getTimestamp() - $agora->getTimestamp();

    $horas = floor($diferenca / 3600);
    $diferenca %= 3600;

    $minutos = floor($diferenca / 60);
    $segundos = $diferenca % 60;

    return sprintf("Tempo restante até %s: %02d:%02d:%02d", $horaAlvo, $horas, $minutos, $segundos);
}
?>

