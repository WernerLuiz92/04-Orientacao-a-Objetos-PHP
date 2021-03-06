<?php

use Werner\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Werner\Banco\Modelo\{Cpf, Endereco};

    require_once 'autoload.php';

    $cliente1 = new Titular(
        new Cpf('087.742.589-23'), 
        "Rita Cecília Martins", 
        new Endereco(
            "Ijuí", 
            "Morada do Sol", 
            "Osvaldo Rieck", 
            "79"
        )
    );

    $cliente2 = new Titular(
        new Cpf("378.890.090-38"), 
        "Ana Stefany Cavalcanti", 
        new Endereco(
            "Ijuí", 
            "Centro", 
            "Dr. Pestana", 
            "875"
        )
    );

    $conta1 = new ContaCorrente($cliente1, 0);
    $conta2 = new ContaCorrente($cliente2, 0);
    $conta3 = new ContaPoupanca($cliente1, 1);

    $contas = [
        $conta1,
        $conta2,
        $conta3
    ];

    /*echo "<pre>";
    var_dump($contas);
    echo "</pre>";*/

    $conta1->depositar(2758);
    $conta1->sacar(12.7);

    $conta2->depositar(150);
    $conta2->transferir(100, $conta3);

    $conta3->depositar(2758);
    $conta3->sacar(12.7);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contas as $conta) { ?>
            <dt><h3>Titular: <?= $conta->getNomeTitular(); ?></h3></dt>
            <dd>Número da Conta: <?= $conta->getNumero(); ?></dd>
            <dd>CPF: <?= $conta->getCpfTitular(); ?></dd>
            <dd>Saldo: R$ <?= $conta->getSaldo(); ?></dd>
            <dd><hr></dd>
            <dd>Endereço: Rua <?= $conta->getEnderecoTitular()->getRua(); ?>, <?= $conta->getEnderecoTitular()->getNumero(); ?></dd>
            <dd>Bairro: <?= $conta->getEnderecoTitular()->getBairro(); ?></dd>
            <dd>Cidade: <?= $conta->getEnderecoTitular()->getCidade(); ?></dd>
        <?php } ?>
    </dl>
</body>
</html>