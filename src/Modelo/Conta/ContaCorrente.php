<?php

namespace Werner\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    // @override
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        echo "Transferencia realizada com sucesso. Seu saldo atual é de: R$ {$this->saldo} <br>";
        
    }

}