<?php

use Werner\Banco\Modelo\Cpf;
use Werner\Banco\Service\Autenticador;
use Werner\Banco\Modelo\Funcionario\Diretor;

require_once 'autoload.php';

    $autenticador = new Autenticador();

    $diretor = new Diretor("Benjamin Eduardo Matheus Barbosa", new Cpf("596.390.790-06"), 4000.00);

    $autenticador->tryLogin($diretor, "4321");
    echo '<br>';
    $autenticador->tryLogin($diretor, "1234");