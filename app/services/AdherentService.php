<?php

require_once __DIR__ . '/../Repositories/AdherentRepository.php';
require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentService
{
    private $adherentRepository;

    public function __construct()
    {
        $this->adherentRepository = new AdherentRepository();
    }

    public function getAllAdherents()
    {
        return $this->adherentRepository->findAll();
    }

    public function getAdherentById($id)
    {
        return $this->adherentRepository->findById($id);
    }

    public function addAdherent(Adherent $adherent)
    {
        return $this->adherentRepository->create($adherent);
    }

    public function updateAdherent(Adherent $adherent)
    {
        return $this->adherentRepository->update($adherent);
    }

    public function deleteAdherent($id)
    {
        return $this->adherentRepository->delete($id);
    }
}