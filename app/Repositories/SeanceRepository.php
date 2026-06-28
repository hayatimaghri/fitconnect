<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Seance.php';

class SeanceRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Afficher toutes les séances
    public function findAll()
    {
        $sql = "SELECT * FROM seance";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Chercher une séance par ID
    public function findById($id)
    {
        $sql = "SELECT * FROM seance WHERE Id_SEANCE = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajouter une séance
    public function create(Seance $seance)
    {
        $sql = "INSERT INTO seance
                (date_seance, type_activite, duree, equipement, Id_Salle, Id_ADHERENT)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $seance->getDateSeance(),
            $seance->getTypeActivite(),
            $seance->getDuree(),
            $seance->getEquipement(),
            $seance->getIdSalle(),
            $seance->getIdAdherent()
        ]);
    }

    // Modifier une séance
    public function update(Seance $seance)
    {
        $sql = "UPDATE seance
                SET date_seance = ?,
                    type_activite = ?,
                    duree = ?,
                    equipement = ?,
                    Id_Salle = ?,
                    Id_ADHERENT = ?
                WHERE Id_SEANCE = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $seance->getDateSeance(),
            $seance->getTypeActivite(),
            $seance->getDuree(),
            $seance->getEquipement(),
            $seance->getIdSalle(),
            $seance->getIdAdherent(),
            $seance->getId()
        ]);
    }

    // Supprimer une séance
    public function delete($id)
    {
        $sql = "DELETE FROM seance WHERE Id_SEANCE = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}