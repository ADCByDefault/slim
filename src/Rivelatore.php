<?php
class Rivelatore implements JsonSerializable
{
    protected $identificativo;
    protected $misurazioni = [];
    protected $unitaMisura;
    protected $sogliaAllarme;
    protected $codiceSeriale;

    public function __construct($identificativo, $unitaMisura, $sogliaAllarme, $codiceSeriale)
    {
        $this->identificativo = $identificativo;
        $this->unitaMisura = $unitaMisura;
        $this->sogliaAllarme = $sogliaAllarme;
        $this->codiceSeriale = $codiceSeriale;
    }
    public function addMisura($data, $misura)
    {
        $this->misurazioni[] = [$data => $misura];
    }
    public function jsonSerialize()
    {
        return [
            "identificativo" => $this->identificativo,
            "misurazioni" => $this->misurazioni,
            "unitaMisura" => $this->unitaMisura,
            "sogliaAllarme" => $this->sogliaAllarme,
            "codiceSeriale" => $this->codiceSeriale,
        ];
    }
    public function getIdentificativo()
    {
        return $this->identificativo;
    }
}
