<?php

class Abonnement
{
    private $id;
    private $typeAbonnement;
    private $dateDebut;
    private $dateFin;
    private $idAdherent;

    public function __construct(
        $id,
        $typeAbonnement,
        $dateDebut,
        $dateFin,
        $idAdherent
    ){
        $this->id = $id;
        $this->typeAbonnement = $typeAbonnement;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->idAdherent = $idAdherent;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTypeAbonnement()
    {
        return $this->typeAbonnement;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function getIdAdherent()
    {
        return $this->idAdherent;
    }

   
}