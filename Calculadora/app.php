<?php

require_once 'funcoes.php';

ExibeMenu();

$opcao = readline();

if ($opcao == 1){
    echo "Resultado: " . Adicao();
} elseif ($opcao == 2){
    echo "Resultado: " . Subtracao();
} elseif ($opcao == 3){
    echo "Resultado: " . Multiplicacao();
} elseif ($opcao == 4){
    echo "Resultado: " . Divisao();
} else {
    echo "Opção invalida !" . PHP_EOL;
    ExibeMenu() . PHP_EOL;
}


