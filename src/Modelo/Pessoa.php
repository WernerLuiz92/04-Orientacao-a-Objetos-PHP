<?php 

namespace Werner\Banco\Modelo;


    class Pessoa
    {
        protected string $nome;
        protected Cpf $cpf;

        public function __construct(string $nome, Cpf $cpf)
        {
            $this->validaNome($nome);
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getNome(): string
        {
                return $this->nome;
        }

        public function setNome($nome): void
        {
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        public function getCpf(): string
        {
                return $this->cpf->getNumeroCpf();
        }

        private function validaNome($nome): void
        {
            if (strlen($nome) < 5) {
                echo "O nome precisa conter pelo menos 5 caracteres.";
                exit();
            }
        }

    }