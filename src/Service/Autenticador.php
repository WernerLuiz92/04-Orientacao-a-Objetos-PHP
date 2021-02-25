<?php

namespace Werner\Banco\Service;

use Werner\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tryLogin(Diretor $diretor, string $senha)
    {

        if (!$diretor->podeAutenticar($senha)) {
            echo "Senha incorreta";
            return;
        }

        echo "Usuário autenticado com sucesso!";

    }
}