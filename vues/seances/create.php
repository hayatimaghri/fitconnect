<?php

require_once '../../app/Controllers/SeanceController.php';
require_once '../../app/Entities/Seance.php';

$controller = new SeanceController();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $seance = new Seance(

        null,
        $_POST['date_seance'],
        $_POST['type_activite'],
        $_POST['duree'],
        $_POST['equipement'],
        $_POST['id_salle'],
        $_POST['id_adherent']

    );

    $controller->store($seance);

    header("Location:index.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ajouter une séance</title>
</head>

<body>

<h2>Ajouter une séance</h2>

<form method="POST">

<label>Date séance</label><br>
<input type="date" name="date_seance" required>

<br><br>

<label>Type activité</label><br>
<input type="text" name="type_activite" required>

<br><br>

<label>Durée (minutes)</label><br>
<input type="number" name="duree" required>

<br><br>

<label>Équipement</label><br>
<input type="text" name="equipement">

<br><br>

<label>Salle</label><br>

<select name="id_salle">

<option value="1">Salle 1</option>
<option value="2">Salle 2</option>
<option value="3">Salle 3</option>
<option value="4">Salle 4</option>

</select>

<br><br>

<label>Id Adhérent</label><br>
<input type="number" name="id_adherent" required>

<br><br>

<button type="submit">

Ajouter

</button>

</form>

<br>

<a href="index.php">

Retour

</a>

</body>
</html>