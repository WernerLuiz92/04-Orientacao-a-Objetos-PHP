<?php 

namespace Werner\Banco\Modelo\Funcionario;

use Werner\Banco\Modelo\Cpf;
use Werner\Banco\Modelo\Pessoa;


abstract class Funcionario extends Pessoa
{

    private float $salario;

    public function __construct(string $nome, Cpf $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }

    abstract public function calculaBonificacao(): float;
    
    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Valor do aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;

    }

}