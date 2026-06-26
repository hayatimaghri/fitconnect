<?php

require_once '../../app/Controllers/AbonnementController.php';
require_once '../../app/Entities/Abonnement.php';

$controller = new AbonnementController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $abonnement = new Abonnement(
        null,
        $_POST['type_abonnement'],
        $_POST['date_debut'],
        $_POST['date_fin'],
        $_POST['id_adherent']
    );

    $controller->store($abonnement);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonnement</title>
</head>
<body>

<h2>Ajouter un abonnement</h2>

<form method="POST">

    <label>Type d'abonnement</label><br>
    <select name="type_abonnement" required>
        <option value="Mensuel">Mensuel</option>
        <option value="Trimestriel">Trimestriel</option>
        <option value="Annuel">Annuel</option>
    </select>

    <br><br>

    <label>Date début</label><br>
    <input type="date" name="date_debut" required>

    <br><br>

    <label>Date fin</label><br>
    <input type="date" name="date_fin" required>

    <br><br>

    <label>Id Adhérent</label><br>
    <input type="number" name="id_adherent" required>

    <br><br>

    <button type="submit">
        Ajouter
    </button>

</form>

<br>

<a href="index.php">Retour</a>

</body>
</html>