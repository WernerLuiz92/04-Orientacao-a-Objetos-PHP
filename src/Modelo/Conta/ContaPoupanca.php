<?php

namespace Werner\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function sacar(float $valorASacar): void
    {

        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }

        $this->saldo -= $valorSaque;
        echo "Saque realizado com sucesso. Seu saldo atual é de: R$ {$this->saldo} <br>";

    }
}
