<?php
require_once "Dispositivo.php";
require_once "RivelatorePressione.php";
require_once "RivelatoreUmidita.php";
class Impianto implements JsonSerializable
{
    protected $nome;
    protected $latitudine;
    protected $longitudine;
    protected $dispositivi = [];
    protected $rivelatori = [];

    public function __construct($nome, $latitudine, $longitudine, $dispositivi, $rivelatori)
    {
        $this->nome = $nome;
        $this->latitudine = $latitudine;
        $this->longitudine = $longitudine;
        if ($dispositivi != null) {
            $this->dispositivi = $dispositivi;
        }
        if ($rivelatori != null) {
            $this->rivelatori = $rivelatori;
        }
    }

    public function getIdDispositivi()
    {
    }

    public function getDispositivi()
    {
        return $this->dispositivi;
    }

    public function getRivelatori()
    {
        return $this->rivelatori;
    }

    public function jsonSerialize()
    {
        return [
            "nome" => $this->nome,
            "latitudine" => $this->latitudine,
            "longitudine" => $this->longitudine,
            "numDispositivi" => count($this->dispositivi),
            "numRivelatori" => count($this->rivelatori),
        ];
    }

    public function __toString()
    {
        $str = "nome: " . $this->nome;
        $str .= ", latitudine: " . $this->latitudine;
        $str .= ", longitudine: " . $this->longitudine;
        $str .= ", ha " . count($this->dispositivi) . "dispositivi d'allarme";
        $str .= ", e " . count($this->rivelatori) . "rivelatori";
        return $str;
    }

    public function popula()
    {
        array_push($this->dispositivi, new Dispositivo(1, 333003301));
        array_push($this->dispositivi, new Dispositivo(2, 333003302));
        array_push($this->dispositivi, new Dispositivo(3, 333003303));

        $r = new RivelatoreUmidita(1, 50, 00001, "terra");
        $r->addMisura("01/01/2024", 30);
        $r->addMisura("02/01/2024", 40);
        $r->addMisura("03/01/2024", 35);
        $r->addMisura("04/01/2024", 25);
        array_push($this->rivelatori, $r);

        $r = new RivelatoreUmidita(2, 30, 00002, "terra");
        $r->addMisura("01/02/2024", 33);
        $r->addMisura("02/02/2024", 34);
        $r->addMisura("03/02/2024", 37);
        $r->addMisura("04/02/2024", 31);
        array_push($this->rivelatori, $r);

        $r = new RivelatoreUmidita(3, 70, 00003, "aria");
        $r->addMisura("01/03/2024", 56);
        $r->addMisura("02/03/2024", 65);
        $r->addMisura("03/03/2024", 41);
        $r->addMisura("04/03/2024", 37);
        array_push($this->rivelatori, $r);
    }
}
