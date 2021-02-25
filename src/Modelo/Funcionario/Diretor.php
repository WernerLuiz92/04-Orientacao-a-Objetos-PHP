<?php

namespace Werner\Banco\Modelo\Funcionario;

use Werner\Banco\Modelo\Autenticavel;
use Werner\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

}