<?php

require_once __DIR__ . '/../Repositories/SeanceRepository.php';
require_once __DIR__ . '/../Entities/Seance.php';

class SeanceService
{
    private $seanceRepository;

    public function __construct()
    {
        $this->seanceRepository = new SeanceRepository();
    }

    // Afficher toutes les séances
    public function getAllSeances()
    {
        return $this->seanceRepository->findAll();
    }

    // Chercher une séance par ID
    public function getSeanceById($id)
    {
        return $this->seanceRepository->findById($id);
    }

    // Ajouter une séance
    public function addSeance(Seance $seance)
    {
        return $this->seanceRepository->create($seance);
    }

    // Modifier une séance
    public function updateSeance(Seance $seance)
    {
        return $this->seanceRepository->update($seance);
    }

    // Supprimer une séance
    public function deleteSeance($id)
    {
        return $this->seanceRepository->delete($id);
    }
}