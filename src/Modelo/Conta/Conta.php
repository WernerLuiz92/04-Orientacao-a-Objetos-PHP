<?php 

namespace Werner\Banco\Modelo\Conta;

use Werner\Banco\Modelo\Endereco;

    class Conta 
    {
        private Titular $titular;
        private string $numero;
        private float $saldo;
        /**
         * @var int $tipo 0 == Conta Corrente; 1 == Poupança
         */
        private int $tipo;

        private static $numeroDeContas = 1;
    

        public function __construct(Titular $titular, int $tipo)
        {
            $this->titular = $titular;
            $this->numero = $this->geraNumeroConta();
            $this->saldo = 0;
            $this->tipo = $tipo;

            self::$numeroDeContas++;

        }

        public function getNumero(): string
        {
            return $this->numero;
        }

        public function getSaldo(): float 
        {
            return $this->saldo;
        }

        public function getTipo(): int
        {
                return $this->tipo;
        }

        public function getNomeTitular(): string
        {
            return $this->titular->getNome();
        }

        public function getCpfTitular(): string
        {
            return $this->titular->getNumeroCpf();
        }

        public function getEnderecoTitular(): Endereco
        {
            return $this->titular->getEndereco();
        }

        public function sacar(float $valorASacar): void
        {
            if ($this->tipo === 0) {
                $tarifaSaque = $valorASacar * 0.05;
            } else {
                $tarifaSaque = $valorASacar * 0.03;
            }
            $valorSaque = $valorASacar + $tarifaSaque;
            if ($valorSaque > $this->saldo) {
                echo "Saldo insuficiente";
                return;
            }

            $this->saldo -= $valorSaque;
            echo "Saque realizado com sucesso. Seu saldo atual é de: R$ {$this->saldo} <br>";
            
        }

        public function depositar(float $valorADepositar): void
        {
            if ($valorADepositar < 0) {
                echo "O valor a ser depositado deve ser maior do que zero!";
                return;
            }

            $this->saldo += $valorADepositar;
            echo "Deposito efetuado com sucesso. Seu saldo atual é de: R$ {$this->saldo} <br>";
            
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

        public static function getNumeroDeContas(): int
        {
            return self::$numeroDeContas;
        }

        private function geraNumeroConta(): string
        {
            $numero = self::getNumeroDeContas();
            return $numero;
        }

    }