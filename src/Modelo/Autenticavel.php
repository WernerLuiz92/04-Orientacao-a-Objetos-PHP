<?php

namespace Werner\Banco\Modelo;

interface Autenticavel
{
    
    public function podeAutenticar(string $senha): bool;

}