<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Afficher tous les abonnements
    public function findAll()
    {
        $sql = "SELECT * FROM abonnement";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Chercher un abonnement par ID
    public function findById($id)
    {
        $sql = "SELECT * FROM abonnement WHERE Id_ABONNEMENT = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajouter un abonnement
    public function create(Abonnement $abonnement)
    {
        $sql = "INSERT INTO abonnement
                (type_abonnement, date_debut, date_fin, Id_ADHERENT)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $abonnement->getTypeAbonnement(),
            $abonnement->getDateDebut(),
            $abonnement->getDateFin(),
            $abonnement->getIdAdherent()
        ]);
    }

    // Modifier un abonnement
    public function update(Abonnement $abonnement)
    {
        $sql = "UPDATE abonnement
                SET type_abonnement = ?,
                    date_debut = ?,
                    date_fin = ?,
                    Id_ADHERENT = ?
                WHERE Id_ABONNEMENT = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $abonnement->getTypeAbonnement(),
            $abonnement->getDateDebut(),
            $abonnement->getDateFin(),
            $abonnement->getIdAdherent(),
            $abonnement->getId()
        ]);
    }

    // Supprimer un abonnement
    public function delete($id)
    {
        $sql = "DELETE FROM abonnement
                WHERE Id_ABONNEMENT = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}