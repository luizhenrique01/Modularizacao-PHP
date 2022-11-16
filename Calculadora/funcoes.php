<?php

function ExibeMenu()
{
    echo '---------------------------' . PHP_EOL;
    echo '         Bem vindo!        ' . PHP_EOL;
    echo '---------------------------' . PHP_EOL;
    echo 'Digite 1 para adição' . PHP_EOL;
    echo 'Digite 2 para subtração' . PHP_EOL;
    echo 'Digite 3 para multiplicação' . PHP_EOL;
    echo 'Digite 4 para divisão' . PHP_EOL;
    echo 'Aguardando novo comando!' . PHP_EOL;
}

function Adicao()
{
    echo 'Adição selecionado' . PHP_EOL;
    $valor1 = readline("Digite o valor 1: ");
    $valor2 = readline("Digite o valor 2: ");

    return  $valor1 + $valor2;
}

function Subtracao()
{
    echo 'Subtração selecionado' . PHP_EOL;
    $valor1 = readline("Digite o valor 1: ");
    $valor2 = readline("Digite o valor 2: ");

    return $valor1 - $valor2;
}

function Multiplicacao()
{
    echo 'Multiplicação selecionado' . PHP_EOL;
    $valor1 = readline("Digite o valor 1: ");
    $valor2 = readline("Digite o valor 2: ");

    return $valor1 * $valor2;
}

function Divisao()
{
    echo 'Divisão selecionado' . PHP_EOL;
    $valor1 = readline("Digite o valor 1: ");
    $valor2 = readline("Digite o valor 2: ");

    return $valor1 / $valor2;
}