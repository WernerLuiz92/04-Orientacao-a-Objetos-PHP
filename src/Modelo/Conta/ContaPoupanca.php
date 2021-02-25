<?php

namespace Werner\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    // @override
    protected function percentualTarifa(): float
        {
            return 0.03;
        }

}