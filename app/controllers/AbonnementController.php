<?php

require_once __DIR__ . '/../services/AbonnementService.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementController
{
    private $abonnementService;

    public function __construct()
    {
        $this->abonnementService = new AbonnementService();
    }

    public function index()
    {
        return $this->abonnementService->getAllAbonnements();
    }

    public function show($id)
    {
        return $this->abonnementService->getAbonnementById($id);
    }

    public function store(Abonnement $abonnement)
    {
        return $this->abonnementService->addAbonnement($abonnement);
    }

    public function update(Abonnement $abonnement)
    {
        return $this->abonnementService->updateAbonnement($abonnement);
    }

    public function delete($id)
    {
        return $this->abonnementService->deleteAbonnement($id);
    }
}