<?php

class Mammifere extends Animal
{
    public function __construct($pattes = 4)
    {
        $this->nbrePattes = $pattes;
    }

}