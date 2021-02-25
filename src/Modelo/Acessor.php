<?php

namespace Werner\Banco\Modelo;

trait Acessor
{
  public function __get(string $nomeAtributo)
  {

    $metodo = 'get' . ucfirst($nomeAtributo);
    return $this->$metodo();
  }

  public function __set($nomeAtributo, $valor)
  {
    $metodo = 'set' . ucfirst($nomeAtributo);
    $this->$metodo($valor);
  }
}
