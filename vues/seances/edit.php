<?php

require_once '../../app/Controllers/SeanceController.php';
require_once '../../app/Entities/Seance.php';

$controller = new SeanceController();

$id = $_GET['id'];

$seance = $controller->show($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $seanceEntity = new Seance(

        $_POST['id'],
        $_POST['date_seance'],
        $_POST['type_activite'],
        $_POST['duree'],
        $_POST['equipement'],
        $_POST['id_salle'],
        $_POST['id_adherent']

    );

    $controller->update($seanceEntity);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Modifier une séance</title>
</head>

<body>

<h2>Modifier une séance</h2>

<form method="POST">

<input
type="hidden"
name="id"
value="<?= $seance['Id_SEANCE']; ?>"
>

<label>Date séance</label><br>

<input
type="date"
name="date_seance"
value="<?= $seance['date_seance']; ?>"
required
>

<br><br>

<label>Type activité</label><br>

<input
type="text"
name="type_activite"
value="<?= $seance['type_activite']; ?>"
required
>

<br><br>

<label>Durée</label><br>

<input
type="number"
name="duree"
value="<?= $seance['duree']; ?>"
required
>

<br><br>

<label>Équipement</label><br>

<input
type="text"
name="equipement"
value="<?= $seance['equipement']; ?>"
>

<br><br>

<label>Salle</label><br>

<select name="id_salle">

<option value="1" <?= $seance['Id_Salle']==1 ? "selected" : ""; ?>>Salle 1</option>

<option value="2" <?= $seance['Id_Salle']==2 ? "selected" : ""; ?>>Salle 2</option>

<option value="3" <?= $seance['Id_Salle']==3 ? "selected" : ""; ?>>Salle 3</option>

<option value="4" <?= $seance['Id_Salle']==4 ? "selected" : ""; ?>>Salle 4</option>

</select>

<br><br>

<label>Id Adhérent</label><br>

<input
type="number"
name="id_adherent"
value="<?= $seance['Id_ADHERENT']; ?>"
required
>

<br><br>

<button type="submit">

Modifier

</button>

</form>

<br>

<a href="index.php">

Retour

</a>

</body>
</html>