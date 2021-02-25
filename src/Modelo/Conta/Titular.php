<?php

namespace Werner\Banco\Modelo\Conta;

use Werner\Banco\Modelo\Cpf;
use Werner\Banco\Modelo\Pessoa;
use Werner\Banco\Modelo\Acessor;
use Werner\Banco\Modelo\Endereco;
use Werner\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    use Acessor;

    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getNumeroCpf(): string
    {
        return $this->cpf->getNumeroCpf();
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '0000';
    }
}
