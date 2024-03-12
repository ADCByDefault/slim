<?php
require_once "Alunno.php";
class Classe
{
    protected $alunni;
    protected $nomeClasse;

    public function __construct($nomeClasse)
    {
        $this->alunni = [];
        $this->nomeClasse = $nomeClasse;
    }

    public function setAlunni($alunni)
    {
        $this->alunni = $alunni;
    }

    public function getAlunni()
    {
        return $this->alunni;
    }

    public function setNomeClasse($nomeClasse)
    {
        $this->nomeClasse = $nomeClasse;
    }

    public function getNomeClasse()
    {
        return $this->nomeClasse;
    }

    public function __toString()
    {
        return "Classe: " . $this->nomeClasse . ", Studenti: " . implode(", ", $this->alunni);
    }

    public function addAlunno($alunno)
    {
        $this->alunni[] = $alunno;
    }
    public function getAlunno($nome)
    {
        $a = [];
        foreach ($this->alunni as $alunno) {
            if ($alunno->getNome() == $nome) {
                $a[] = $alunno;
            }
        }
        return $a;
    }

    function populate()
    {
        $a1 = new Alunno("Mario", "Rossi", 5);
        $a2 = new Alunno("Luca", "Bianchi", 6);
        $a3 = new Alunno("Paolo", "Verdi", 7);
        $a4 = new Alunno("Paolo", "Rossi", 7);
        $this->addAlunno($a1);
        $this->addAlunno($a2);
        $this->addAlunno($a3);
        $this->addAlunno($a4);
    }
}
