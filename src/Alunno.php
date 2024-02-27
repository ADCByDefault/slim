<?php
class Alunno
{
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function setEta($eta)
    {
        $this->eta = $eta;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function __toString()
    {
        return "Nome: " . $this->nome . ", Cognome: " . $this->cognome . ", Età: " . $this->eta;
    }
}

?>