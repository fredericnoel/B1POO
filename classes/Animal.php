<?php

class Animal
{
    protected $masse;
    protected $embranchement;
    protected $classe;
    protected $nbrePattes;
    protected $sexe;
    protected $metabolisme;//Cycle normal, reproduction, hibernation

    public function seReproduire()
    {
        return "Reproduction";
    }

    public function besoinsEnergetiques()
    {
        return $this->metabolisme;
    }

    /**
     * @return mixed
     */
    public function getMasse()
    {
        return $this->masse;
    }

    /**
     * @param mixed $masse
     */
    public function setMasse($masse): void
    {
        $this->masse = $masse;
    }

    /**
     * @return mixed
     */
    public function getEmbranchement()
    {
        return $this->embranchement;
    }

    /**
     * @param mixed $embranchement
     */
    public function setEmbranchement($embranchement): void
    {
        $this->embranchement = $embranchement;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe): void
    {
        $this->classe = $classe;
    }

    /**
     * @return mixed
     */
    public function getNbrePattes()
    {
        return $this->nbrePattes;
    }

    /**
     * @param mixed $nbrePattes
     */
    public function setNbrePattes($nbrePattes): void
    {
        $this->nbrePattes = $nbrePattes;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getMetabolisme()
    {
        return $this->metabolisme;
    }

    /**
     * @param mixed $metabolisme
     */
    public function setMetabolisme($metabolisme): void
    {
        $this->metabolisme = $metabolisme;
    }
}
