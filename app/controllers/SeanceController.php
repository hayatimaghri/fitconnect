<?php

require_once __DIR__ . '/../Services/SeanceService.php';
require_once __DIR__ . '/../Entities/Seance.php';

class SeanceController
{
    private $seanceService;

    public function __construct()
    {
        $this->seanceService = new SeanceService();
    }

    public function index()
    {
        return $this->seanceService->getAllSeances();
    }

    public function show($id)
    {
        return $this->seanceService->getSeanceById($id);
    }

    public function store(Seance $seance)
    {
        return $this->seanceService->addSeance($seance);
    }

    public function update(Seance $seance)
    {
        return $this->seanceService->updateSeance($seance);
    }

    public function delete($id)
    {
        return $this->seanceService->deleteSeance($id);
    }
}