<?php

require_once __DIR__ . '/../../config/Database.php';

require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentRepository
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM adherent";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// chercher un addherent by id
public function findById($id)
{
    $sql = "SELECT * FROM adherent WHERE Id_ADHERENT = ?";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// create

public function create(Adherent $adherent)
{
    $sql = "INSERT INTO adherent
            (nom, prenom, telephone, email, date_inscription, Id_Salle)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        $adherent->getNom(),
        $adherent->getPrenom(),
        $adherent->getTelephone(),
        $adherent->getEmail(),
        $adherent->getDateInscription(),
        $adherent->getIdSalle()
    ]);
}
// modéfier

public function update(Adherent $adherent)
{
    $sql = "UPDATE adherent
            SET nom = ?,
                prenom = ?,
                telephone = ?,
                email = ?,
                date_inscription = ?,
                Id_Salle = ?
            WHERE Id_ADHERENT = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        $adherent->getNom(),
        $adherent->getPrenom(),
        $adherent->getTelephone(),
        $adherent->getEmail(),
        $adherent->getDateInscription(),
        $adherent->getIdSalle(),
        $adherent->getId()
    ]);
}

// supprimer 
public function delete($id)
{
    $sql = "DELETE FROM adherent
            WHERE Id_ADHERENT = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([$id]);
}

}




?>