<?php
namespace Builder;

class FogueteProduct
{
    protected $modelo;

    protected $numeroMotores;

    protected $numeroLugares;

    protected $litrosCombustivel;

    public function __toString() : string
    {
        $result = [
            "Foguete modelo   : {$this->getModelo()}",
            "Número de motores: {$this->getNumeroMotores()}",
            "Número de lugares: {$this->getNumeroLugares()}",
            "Litros de tanque : {$this->getLitrosCombustivel()}",
        ];
        return join('<br>', $result)."<br><br>";
    }

    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo) : FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getNumeroMotores() : int
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores) : FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares() : int
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares) : FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }

     public function getLitrosCombustivel() : int
    {
        return $this->litrosCombustivel;
    }

    public function setLitrosCombustivel(int $litrosCombustivel) : FogueteProduct
    {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }
}