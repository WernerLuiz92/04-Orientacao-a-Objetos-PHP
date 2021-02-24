<?php

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->validaCpf($numero);
        $this->numero = $numero;
    }

    public function getCpf(): string
    {
        return $this->numero;
    }

    // Este algoritmo não é meu, tentar entender mais adiante!!!
    private function validaCpf($numero): void
    {
        // Extrai somente os números
        $numero = preg_replace( '/[^0-9]/is', '', $numero );
            
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($numero) != 11) {
            echo "CPF Inválido";
            exit();
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $numero)) {
            echo "CPF Inválido";
            exit();
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $numero[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($numero[$c] != $d) {
                echo "CPF Inválido";
                exit();
            }
        }
    }
}