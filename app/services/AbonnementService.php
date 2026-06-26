<?php

require_once __DIR__ . '/../Repositories/AbonnementRepository.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementService
{
    private $abonnementRepository;

    public function __construct()
    {
        $this->abonnementRepository = new AbonnementRepository();
    }

    // Afficher tous les abonnements
    public function getAllAbonnements()
    {
        return $this->abonnementRepository->findAll();
    }

    // Chercher un abonnement par ID
    public function getAbonnementById($id)
    {
        return $this->abonnementRepository->findById($id);
    }

    // Ajouter un abonnement
    public function addAbonnement(Abonnement $abonnement)
    {
        return $this->abonnementRepository->create($abonnement);
    }

    // Modifier un abonnement
    public function updateAbonnement(Abonnement $abonnement)
    {
        return $this->abonnementRepository->update($abonnement);
    }

    // Supprimer un abonnement
    public function deleteAbonnement($id)
    {
        return $this->abonnementRepository->delete($id);
    }
}