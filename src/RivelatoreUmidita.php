<?php
include_once "Rivelatore.php";
class RivelatoreUmidita extends Rivelatore
{
    protected $posizione;
    public function __construct($identificativo, $sogliaAllarme, $codiceSeriale, $posizione)
    {
        parent::__construct($identificativo, "%", $sogliaAllarme, $codiceSeriale);
        $this->posizione = $posizione;
    }
    public function jsonSerialize()
    {
        return array_push(parent::jsonSerialize(), ["posizione" => $this->posizione]);
    }
}
