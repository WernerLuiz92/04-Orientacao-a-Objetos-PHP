<?php

namespace Werner\Banco\Service;

use Werner\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tryLogin(Autenticavel $autenticavel, string $senha)
    {

        if (!$autenticavel->podeAutenticar($senha)) {
            echo "Senha incorreta";
            return;
        }

        echo "Usuário autenticado com sucesso!";

    }
}