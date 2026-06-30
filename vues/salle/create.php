<?php

require_once '../../app/Controllers/SalleController.php';
require_once '../../app/Entities/Salle.php';

$controller = new SalleController();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $salle = new Salle(

        null,
        $_POST['nom_salle'],
        $_POST['ville'],
        $_POST['adresse']

    );

    $controller->store($salle);

    header("Location:index.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ajouter Salle</title>
</head>

<body>

<h2>Ajouter une Salle</h2>

<form method="POST">

<label>Nom Salle</label><br>

<input
type="text"
name="nom_salle"
required
>

<br><br>

<label>Ville</label><br>

<input
type="text"
name="ville"
required
>

<br><br>

<label>Adresse</label><br>

<input
type="text"
name="adresse"
required
>

<br><br>

<button type="submit">Ajouter</button>

</form>

<br>

<a href="index.php">Retour </a>

</body>
</html>