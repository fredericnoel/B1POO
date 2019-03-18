
<?php

class Oiseau extends Animal
{
    public $ailes = true;

    public function __construct($pattes = 2)
    {
        $this->setNbrePattes($pattes);
        //parent::getClasse();
    }
}
