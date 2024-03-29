<?php
include_once "Rivelatore.php";
class RivelatorePressione extends Rivelatore
{
    protected $tipologia;
    public function __construct($identificativo, $sogliaAllarme, $codiceSeriale, $tipologia)
    {
        parent::__construct($identificativo, "bar", $sogliaAllarme, $codiceSeriale);
        $this->tipologia = $tipologia;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), ["tipologia" => $this->tipologia]);
    }
}
