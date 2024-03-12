<?php
include_once "Rivelatore.php";
class RivelatorePressioone extends Rivelatore
{
    protected $tipologia;
    public function __construct($identificativo, $sogliaAllarme, $codiceSeriale, $tipologia)
    {
        parent::__construct($identificativo, "bar", $sogliaAllarme, $codiceSeriale);
        $this->tipologia = $tipologia;
    }
    public function jsonSerialize()
    {
        return array_push(parent::jsonSerialize(), ["tipologia" => $this->tipologia]);
    }
}
