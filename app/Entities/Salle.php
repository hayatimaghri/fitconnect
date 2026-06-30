<?php

class Salle
{
    private $id;
    private $nomSalle;
    private $ville;
    private $adresse;

    public function __construct(
        $id,
        $nomSalle,
        $ville,
        $adresse
    ){
        $this->id = $id;
        $this->nomSalle = $nomSalle;
        $this->ville = $ville;
        $this->adresse = $adresse;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
}