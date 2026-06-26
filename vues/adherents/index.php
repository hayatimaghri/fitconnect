<?php

require_once '../../app/Controllers/AdherentController.php';

$controller = new AdherentController();
$adherents = $controller->index();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Adhérents</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        table{
            border-collapse: collapse;
            width:100%;
        }

        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        th{
            background:#f2f2f2;
        }

        a{
            text-decoration:none;
            padding:5px 10px;
        }

        .btn{
            background:green;
            color:white;
            border-radius:5px;
        }

        .edit{
            color:blue;
        }

        .delete{
            color:red;
        }
    </style>

</head>

<body>

<h2>Liste des Adhérents</h2>

<br>

<a class="btn" href="create.php">
Ajouter un adhérent
</a>

<br><br>

<table>

<tr>

<th>ID</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Date inscription</th>
<th>Salle</th>
<th>Actions</th>

</tr>

<?php foreach($adherents as $adherent){ ?>

<tr>

<td><?= $adherent['Id_ADHERENT']; ?></td>

<td><?= $adherent['nom']; ?></td>

<td><?= $adherent['prenom']; ?></td>

<td><?= $adherent['telephone']; ?></td>

<td><?= $adherent['email']; ?></td>

<td><?= $adherent['date_inscription']; ?></td>

<td><?= $adherent['Id_Salle']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?= $adherent['Id_ADHERENT']; ?>">
Modifier
</a>

|

<a class="delete"
href="delete.php?id=<?= $adherent['Id_ADHERENT']; ?>"  onclick="return confirm('Voulez-vous supprimer cet adhérent ?');">

Supprimer
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>