<?php

require_once '../../app/controllers/AdherentController.php';
require_once '../../app/Entities/Adherent.php';

$controller = new AdherentController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adherent = new Adherent(
        null,
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['telephone'],
        $_POST['email'],
        $_POST['date_inscription'],
        $_POST['id_salle']
    );

    $controller->store($adherent);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un adhérent</title>
</head>
<body>

<h2>Ajouter un adhérent</h2>

<form method="POST">

    <label>Nom</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prénom</label><br>
    <input type="text" name="prenom" required><br><br>

    <label>Téléphone</label><br>
    <input type="text" name="telephone" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Date d'inscription</label><br>
    <input type="date" name="date_inscription" required><br><br>

    <label>Salle</label><br>

    <select name="id_salle">

        <option value="1">Salle 1</option>
        <option value="2">Salle 2</option>
        <option value="3">Salle 3</option>
        <option value="4">Salle 4</option>

    </select>

    <br><br>

    <button type="submit">
        Ajouter
    </button>

</form>

<br>

<a href="index.php">Retour</a>

</body>
</html>