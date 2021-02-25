<?php 

namespace Werner\Banco\Modelo\Funcionario;

use Werner\Banco\Modelo\Cpf;
use Werner\Banco\Modelo\Pessoa;


abstract class Funcionario extends Pessoa
{

    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Valor do aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
        
    }

}