<?php

require_once 'funcoes.php';

ExibeMenu();

$opcao = readline();
$valor1 = readline("Digite o valor 1: ");
$valor2 = readline("Digite o valor 2: ");

if ($opcao == 1){
    echo "Resultado: " . Adicao($valor1, $valor2);
} elseif ($opcao == 2){
    echo "Resultado: " . Subtracao($valor1, $valor2);
} elseif ($opcao == 3){
    echo "Resultado: " . Multiplicacao($valor1, $valor2);
} elseif ($opcao == 4){
    echo "Resultado: " . Divisao($valor1, $valor2);
} else {
    echo "Opção invalida !" . PHP_EOL;
    ExibeMenu() . PHP_EOL;
}


