<?php

namespace Werner\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }

}
