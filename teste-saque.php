<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
try {
    $conta->deposita(500);

    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo 'Você não tem saldo suficiente!' . PHP_EOL;
    echo $exception->getMessage();
}

//echo $conta->recuperaSaldo();
