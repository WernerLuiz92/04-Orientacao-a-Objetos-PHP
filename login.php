<?php

use Werner\Banco\Modelo\Conta\Titular;
use Werner\Banco\Service\Autenticador;
use Werner\Banco\Modelo\{Cpf, Endereco};
use Werner\Banco\Modelo\Funcionario\{Diretor, Gerente};

require_once 'autoload.php';

    $autenticador = new Autenticador();

    $diretor = new Diretor(
        "Benjamin Eduardo Matheus Barbosa", 
        new Cpf("596.390.790-06"), 
        4000.00
    );
    
    $gerente = new Gerente(
        "Henry Luís da Paz", 
        new Cpf("363.741.430-94"), 
        3500.00
    );

    $cliente = new Titular(
        new Cpf("378.890.090-38"), 
        "Ana Stefany Cavalcanti", 
        new Endereco(
            "Ijuí", 
            "Centro", 
            "Dr. Pestana", 
            "875"
        )
    );

    echo 'Diretor: <br>';
    $autenticador->tryLogin($diretor, "4321");
    echo '<br>';
    $autenticador->tryLogin($diretor, "1234");
    echo '<br>----------<br>';
    echo 'Gerente: <br>';
    $autenticador->tryLogin($gerente, "1234");
    echo '<br>';
    $autenticador->tryLogin($gerente, "4321");
    echo '<br>----------<br>';
    echo 'Cliente: <br>';
    $autenticador->tryLogin($cliente, "9999");
    echo '<br>';
    $autenticador->tryLogin($cliente, "0000");