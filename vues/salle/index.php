<?php

require_once '../../app/Controllers/SalleController.php';

$controller = new SalleController();
$salles = $controller->index();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des Salles</title>

<link rel="stylesheet" href="../style.css">

<?php include "../header.php"; ?>
</head>

<body>

<h2 class=list>Liste des Salles</h2>

<br>

<a class="btn" href="create.php">
Ajouter une Salle
</a>

<br><br>

<table>

<tr>

<th>ID</th>
<th>Nom Salle</th>
<th>Ville</th>
<th>Adresse</th>
<th>Actions</th>

</tr>

<?php foreach($salles as $salle){ ?>

<tr>

<td><?= $salle['Id_Salle']; ?></td>

<td><?= $salle['nom_salle']; ?></td>

<td><?= $salle['ville']; ?></td>

<td><?= $salle['adresse']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?= $salle['Id_Salle']; ?>">
Modifier
</a>

|

<a class="delete"
href="delete.php?id=<?= $salle['Id_Salle']; ?>"
onclick="return confirm('Supprimer cette salle ?');">

Supprimer

</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>