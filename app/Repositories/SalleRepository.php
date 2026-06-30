<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Salle.php';

class SalleRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Afficher toutes les salles
    public function findAll()
    {
        $sql = "SELECT * FROM salle";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Chercher une salle par ID
    public function findById($id)
    {
        $sql = "SELECT * FROM salle WHERE Id_Salle = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajouter une salle
    public function create(Salle $salle)
    {
        $sql = "INSERT INTO salle(nom_salle, ville, adresse)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $salle->getNomSalle(),
            $salle->getVille(),
            $salle->getAdresse()
        ]);
    }

    // Modifier une salle
    public function update(Salle $salle)
    {
        $sql = "UPDATE salle
                SET nom_salle = ?, ville = ?, adresse = ?
                WHERE Id_Salle = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $salle->getNomSalle(),
            $salle->getVille(),
            $salle->getAdresse(),
            $salle->getId()
        ]);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM salle WHERE Id_Salle = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}

?>