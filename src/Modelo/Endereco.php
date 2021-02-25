<?php 

namespace Werner\Banco\Modelo;

        /**
         * Class Endereco
         * @package Werner\Banco\Modelo
         * @property-read string $cidade
         * @property-read string $rua
         * @property-read string $bairro
         * @property-read string $numero
         */

final class Endereco
{
        private string $cidade;
        private string $bairro;
        private string $rua;
        private string $numero;

        public function __construct(string $cidade, string $bairro, string $rua, string $numero)
        {
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;

        }

        public function getCidade(): string
        {
                return $this->cidade;
        }

        public function setCidade(string $cidade)
        {
                $this->cidade = $cidade;
        }

        public function getBairro()
        {
                return $this->bairro;
        }

        public function setBairro(string $bairro)
        {
                $this->bairro = $bairro;
        }

        public function getRua()
        {
                return $this->rua;
        }

        public function setRua(string $rua)
        {
                $this->rua = $rua;
        }

        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero(string $numero)
        {
                $this->numero = $numero;
        }

        public function __toString(): string
        {
                return "{$this->rua}, {$this->numero} - {$this->bairro} <br> {$this->cidade}";
        }

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