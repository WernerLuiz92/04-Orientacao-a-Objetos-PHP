<?php

namespace Werner\Banco\Modelo\Funcionario;

use Werner\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
