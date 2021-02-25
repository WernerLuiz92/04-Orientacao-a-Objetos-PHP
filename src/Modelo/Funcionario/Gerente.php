<?php

namespace Werner\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    
    public function calculaBonificacao(): float
        {
            return $this->getSalario();
        }

}
