<?php

require_once '../../app/Controllers/AbonnementController.php';
require_once '../../app/Entities/Abonnement.php';

$controller = new AbonnementController();

$id = $_GET['id'];

$abonnement = $controller->show($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $abonnementEntity = new Abonnement(

        $_POST['id'],
        $_POST['type_abonnement'],
        $_POST['date_debut'],
        $_POST['date_fin'],
        $_POST['id_adherent']

    );

    $controller->update($abonnementEntity);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Modifier un abonnement</title>

</head>

<body>

<h2>Modifier un abonnement</h2>

<form method="POST">

<input
type="hidden"
name="id"
value="<?= $abonnement['Id_ABONNEMENT']; ?>"
>

<label>Type d'abonnement</label><br>

<select name="type_abonnement">

    <option value="Mensuel"
    <?= $abonnement['type_abonnement']=="Mensuel" ? "selected" : ""; ?>>
        Mensuel
    </option>

    <option value="Trimestriel"
    <?= $abonnement['type_abonnement']=="Trimestriel" ? "selected" : ""; ?>>
        Trimestriel
    </option>

    <option value="Annuel"
    <?= $abonnement['type_abonnement']=="Annuel" ? "selected" : ""; ?>>
        Annuel
    </option>

</select>

<br><br>

<label>Date début</label><br>

<input
type="date"
name="date_debut"
value="<?= $abonnement['date_debut']; ?>"
required
>

<br><br>

<label>Date fin</label><br>

<input
type="date"
name="date_fin"
value="<?= $abonnement['date_fin']; ?>"
required
>

<br><br>

<label>Id Adhérent</label><br>

<input
type="number"
name="id_adherent"
value="<?= $abonnement['Id_ADHERENT']; ?>"
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