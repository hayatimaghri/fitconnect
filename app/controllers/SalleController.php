<?php

require_once __DIR__ . '/../Services/SalleService.php';
require_once __DIR__ . '/../Entities/Salle.php';

class SalleController
{
    private $salleService;

    public function __construct()
    {
        $this->salleService = new SalleService();
    }

    public function index()
    {
        return $this->salleService->getAllSalles();
    }

    public function show($id)
    {
        return $this->salleService->getSalleById($id);
    }

    public function store(Salle $salle)
    {
        return $this->salleService->addSalle($salle);
    }

    public function update(Salle $salle)
    {
        return $this->salleService->updateSalle($salle);
    }

    public function delete($id)
    {
        return $this->salleService->deleteSalle($id);
    }
}