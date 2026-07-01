<?php

require_once '../../app/Controllers/AbonnementController.php';

$controller = new AbonnementController();
$abonnements = $controller->index();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Abonnements</title>
<link rel="stylesheet" href="../style.css">
<?php include "../header.php"; ?>
</head>

<body>

<h2 class=list>Liste des Abonnements</h2>

<br>

<a class="btn" href="create.php">
    Ajouter un abonnement
</a>

<br><br>

<table>

<tr>

    <th>ID</th>
    <th>Type d'abonnement</th>
    <th>Date début</th>
    <th>Date fin</th>
    <th>Id Adhérent</th>
    <th>Actions</th>

</tr>

<?php foreach($abonnements as $abonnement){ ?>

<tr>

    <td><?= $abonnement['Id_ABONNEMENT']; ?></td>

    <td><?= $abonnement['type_abonnement']; ?></td>

    <td><?= $abonnement['date_debut']; ?></td>

    <td><?= $abonnement['date_fin']; ?></td>

    <td><?= $abonnement['Id_ADHERENT']; ?></td>

    <td>

        <a class="edit"
           href="edit.php?id=<?= $abonnement['Id_ABONNEMENT']; ?>">
            Modifier
        </a>

        |

        <a class="delete"
           href="delete.php?id=<?= $abonnement['Id_ABONNEMENT']; ?>"
           onclick="return confirm('Voulez-vous supprimer cet abonnement ?');">
            Supprimer
        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>
</html>