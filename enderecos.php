<?php

use Werner\Banco\Modelo\Endereco;

require_once 'autoload.php';

$enderecos = [
    $endereco1 = new Endereco(
        "Ijuí",
        "Morada do Sol",
        "Rua Osvaldo Rieck",
        "79"
    ),
    $endereco2 = new Endereco(
        "Natal",
        "Nossa Senhora da Apresentação",
        "Rua Sebastião Rosa",
        "782"
    ),
    $endereco3 = new Endereco(
        "Cariacica",
        "Tabajara",
        "Rua Seis",
        "763"
    ),
    $endereco4 = new Endereco(
        "Campinas",
        "Swiss Park",
        "Rua Cesar Lattes",
        "733"
    ),
    $endereco5 = new Endereco(
        "Londrina",
        "Conjunto Novo Amparo",
        "Rua Flávio Buranelli",
        "649"
    )
];

$endereco1->rua = "Rua Doutor Pestana";

foreach ($enderecos as $endereco) {
    echo $endereco->__toString();
    echo '<br>-----<br>';
}
