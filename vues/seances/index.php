<?php

require_once '../../app/Controllers/SeanceController.php';

$controller = new SeanceController();
$seances = $controller->index();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des séances</title>

<link rel="stylesheet" href="../style.css">

<?php include "../header.php"; ?>
</head>

<body>

<h2 class=list>Liste des séances</h2>

<br>

<a class="btn" href="create.php">
Ajouter une séance
</a>

<br><br>

<table>

<tr>

<th>ID</th>
<th>Date séance</th>
<th>Type activité</th>
<th>Durée</th>
<th>Équipement</th>
<th>Salle</th>
<th>Adhérent</th>
<th>Actions</th>

</tr>

<?php foreach($seances as $seance){ ?>

<tr>

<td><?= $seance['Id_SEANCE']; ?></td>

<td><?= $seance['date_seance']; ?></td>

<td><?= $seance['type_activite']; ?></td>

<td><?= $seance['duree']; ?> min</td>

<td><?= $seance['equipement']; ?></td>

<td><?= $seance['Id_Salle']; ?></td>

<td><?= $seance['Id_ADHERENT']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?= $seance['Id_SEANCE']; ?>">
Modifier
</a>

|

<a class="delete"
href="delete.php?id=<?= $seance['Id_SEANCE']; ?>"
onclick="return confirm('Voulez-vous supprimer cette séance ?');">

Supprimer

</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>