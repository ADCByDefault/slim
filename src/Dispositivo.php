<?php
class Dispositivo implements JsonSerializable
{
    protected $identificativo;
    protected $numeroTelefono;
    public function __construct($identificativo, $numeroTelefono)
    {
        $this->identificativo = $identificativo;
        $this->numeroTelefono = $numeroTelefono;
    }

    public function jsonSerialize()
    {
        return [
            "identificativo" => $this->identificativo,
            "numeroTelefono" => $this->numeroTelefono,
        ];
    }

    public function getIdentificativo()
    {
        return $this->identificativo;
    }
}
