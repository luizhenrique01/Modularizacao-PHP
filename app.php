<?php

require_once 'funcoes.php';

$respostaLoop = 's';

while ($respostaLoop == 's') {
    //input
    $nota1 = readline("Digite a nota 1: ");
    $nota2 = readline("Digite a nota 2: ");
    $nota3 = readline("Digite a nota 3: ");
    $letra = readline("Letra: ");

    if ($letra == 'A') {
        echo "A media aritimetica das notas e: " . mediaAritimetica($nota1, $nota2, $nota3) . PHP_EOL;
    } elseif ($letra == 'B') {
        echo "A media ponderada das notas e: " . mediaPonderada($nota1, $nota2, $nota3) . PHP_EOL;
    } else {
        echo "Letra: $letra invalida! Tente novamente com A ou B: " . PHP_EOL;
    }

    $respostaLoop = readline('Deseja continuar adicionando novas notas? S ou N ' . PHP_EOL);
    if ($respostaLoop == 'S' || $respostaLoop == 's'){
        $respostaLoop = 's';
    }
}
