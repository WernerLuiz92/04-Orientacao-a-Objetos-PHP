<?php

    class Titular
    {
        private string $nome;

        public function __construct(Cpf $cpf, string $nome)
        {
            
            $this->cpf = $cpf;
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function getNumeroCpf(): string
        {
            return $this->cpf->getCpf();
        }

        public function setNome($nome): void
        {
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        private function validaNome($nome): void
        {
            if (strlen($nome) < 5) {
                echo "O nome precisa conter pelo menos 5 caracteres.";
                exit();
            }
        }
    }