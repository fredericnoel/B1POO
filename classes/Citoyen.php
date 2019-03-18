<?php

class Citoyen implements Habitant
{
    public $numero;
    public $rue;
    public $cp;
    public $ville;

    public function __call($methode, $arguments)
    {
        $message = "Ta methode $methode n'existe pas";
        Log::logWrite($message);
    }

    public function setAdresse($numero, $rue, $cp, $ville)
    {
        $this->numero = $numero;
        $this->rue = $rue;
        $this->cp = $cp;
        $this->ville = $ville;
    }
}