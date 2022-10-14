<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException $problema) {
        echo 'Na função 1, eu resolvi o problema da função 2!' . PHP_EOL;
    } catch (DivisionByZeroError $erro) {
        echo 'Erro ao dividir por 0!' . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL; // Essa linha nunca vau ser executada pois a exceção acima foi pega pela funcao1
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
