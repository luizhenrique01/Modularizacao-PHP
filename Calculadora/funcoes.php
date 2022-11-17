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

function Adicao(float $valor1, float $valor2)
{
    echo 'Adição selecionado' . PHP_EOL;
    return  $valor1 + $valor2;
}

function Subtracao(float $valor1, float $valor2)
{
    echo 'Subtração selecionado' . PHP_EOL;
    return $valor1 - $valor2;
}

function Multiplicacao(float $valor1, float $valor2)
{
    echo 'Multiplicação selecionado' . PHP_EOL;
    return $valor1 * $valor2;
}

function Divisao(float $valor1, float $valor2)
{
    echo 'Divisão selecionado' . PHP_EOL;
    return $valor1 / $valor2;
}