<?php

class Adherent
{
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $email;
    private $dateInscription;
    private $idSalle;

    public function __construct(
        $id,
        $nom,
        $prenom,
        $telephone,
        $email,
        $dateInscription,
        $idSalle
    ){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->dateInscription = $dateInscription;
        $this->idSalle = $idSalle;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDateInscription(){
        return $this->dateInscription;
    }

    public function getIdSalle(){
        return $this->idSalle;
    }
}