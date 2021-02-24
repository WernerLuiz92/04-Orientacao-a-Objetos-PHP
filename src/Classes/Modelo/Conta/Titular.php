<?php 

namespace Werner\Banco\Classes\Modelo\Conta;

use Werner\Banco\Classes\Modelo\Pessoa;
use Werner\Banco\Classes\Modelo\Endereco;
use Werner\Banco\Classes\Modelo\Cpf;

    class Titular extends Pessoa
    {

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

    }