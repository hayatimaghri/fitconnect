<?php

require_once __DIR__ . '/../Repositories/SalleRepository.php';
require_once __DIR__ . '/../Entities/Salle.php';

class SalleService
{
    private $salleRepository;

    public function __construct()
    {
        $this->salleRepository = new SalleRepository();
    }

    public function getAllSalles()
    {
        return $this->salleRepository->findAll();
    }

    public function getSalleById($id)
    {
        return $this->salleRepository->findById($id);
    }

    public function addSalle(Salle $salle)
    {
        return $this->salleRepository->create($salle);
    }

    public function updateSalle(Salle $salle)
    {
        return $this->salleRepository->update($salle);
    }

    public function deleteSalle($id)
    {
        return $this->salleRepository->delete($id);
    }
}