<?php

require_once __DIR__ . '/../services/AdherentService.php';
require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentController
{
    private $adherentService;

    public function __construct()
    {
        $this->adherentService = new AdherentService();
    }

    public function index()
    {
        return $this->adherentService->getAllAdherents();
    }

    public function show($id)
    {
        return $this->adherentService->getAdherentById($id);
    }

    public function store(Adherent $adherent)
    {
        return $this->adherentService->addAdherent($adherent);
    }

    public function update(Adherent $adherent)
    {
        return $this->adherentService->updateAdherent($adherent);
    }

    public function delete($id)
    {
        return $this->adherentService->deleteAdherent($id);
    }
}