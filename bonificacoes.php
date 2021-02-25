<?php

use Werner\Banco\Modelo\Cpf;
use Werner\Banco\Modelo\Funcionario\Desenvolvedor;
use Werner\Banco\Modelo\Funcionario\Diretor;
use Werner\Banco\Modelo\Funcionario\EditorDeVideo;
use Werner\Banco\Modelo\Funcionario\Gerente;
use Werner\Banco\Service\ControladorDeBonificacoes;


require 'autoload.php';

    $funcionarios = [
        $funcionario1 = new Desenvolvedor("Werner Luiz Gottschalt", new Cpf("087.742.589-23"), 1400.00),
        $funcionario2 = new EditorDeVideo("Fernanda Alessandra Silveira", new Cpf("755.288.610-20"), 1500.00),
        $funcionario3 = new Gerente("Henry Luís da Paz", new Cpf("363.741.430-94"), 3500.00),
        $funcionario4 = new Diretor("Benjamin Eduardo Matheus Barbosa", new Cpf("596.390.790-06"), 4000.00),
        $funcionario5 = new Gerente("Bianca Ester Débora Pereira", new Cpf("923.465.590-75"), 4800.00)
    ];

    echo $funcionario1->getSalario().'<br>';

    $funcionario1->sobeDeNivel();
    
    echo $funcionario1->getSalario().'<br>';

    $controlador = new ControladorDeBonificacoes();

    foreach ($funcionarios as $funcionario) {
        $controlador->adicionaBonificacao($funcionario);
        echo $controlador->getTotalBonificacoes().'<br>';
    }

    echo 'Total: '.$controlador->getTotalBonificacoes();
    