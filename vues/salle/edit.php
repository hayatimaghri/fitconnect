<?php

require_once '../../app/Controllers/SalleController.php';
require_once '../../app/Entities/Salle.php';

$controller = new SalleController();

$id = $_GET['id'];

$salle = $controller->show($id);

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $salleEntity = new Salle(

        $_POST['id'],
        $_POST['nom_salle'],
        $_POST['ville'],
        $_POST['adresse']

    );

    $controller->update($salleEntity);

    header("Location:index.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Modifier Salle</title>
</head>

<body>

<h2>Modifier une Salle</h2>

<form method="POST">

<input
type="hidden"
name="id"
value="<?= $salle['Id_Salle']; ?>"
>

<label>Nom Salle</label><br>

<input
type="text"
name="nom_salle"
value="<?= $salle['nom_salle']; ?>"
required
>

<br><br>

<label>Ville</label><br>

<input
type="text"
name="ville"
value="<?= $salle['ville']; ?>"
required
>

<br><br>

<label>Adresse</label><br>

<input
type="text"
name="adresse"
value="<?= $salle['adresse']; ?>"
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