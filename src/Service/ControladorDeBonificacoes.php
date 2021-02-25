<?php

namespace Werner\Banco\Service;

use Werner\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}