<?php

require_once '../../app/controllers/AdherentController.php';
require_once '../../app/Entities/Adherent.php';

$controller = new AdherentController();

$id = $_GET['id'];

$adherent = $controller->show($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adherentEntity = new Adherent(

        $_POST['id'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['telephone'],
        $_POST['email'],
        $_POST['date_inscription'],
        $_POST['id_salle']

    );

    $controller->update($adherentEntity);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Modifier Adhérent</title>

</head>

<body>

<h2>Modifier un adhérent</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $adherent['Id_ADHERENT']; ?>">

<label>Nom</label><br>

<input type="text" name="nom" value="<?= $adherent['nom']; ?>" required> <br><br>

<label>Prénom</label><br>

<input type="text"
name="prenom"
value="<?= $adherent['prenom']; ?>"
required
>

<br><br>


<label>Téléphone</label><br>

<input
type="text"
name="telephone"
value="<?= $adherent['telephone']; ?>"
required
>

<br><br>

<label>Email</label><br>

<input
type="email"
name="email"
value="<?= $adherent['email']; ?>"
required
>

<br><br>

<label>Date inscription</label><br>

<input
type="date"
name="date_inscription"
value="<?= $adherent['date_inscription']; ?>"
required
>

<br><br>

<label>Salle</label><br>

<select name="id_salle">

<option value="1" <?= $adherent['Id_Salle']==1?'selected':''; ?>>Salle 1</option>

<option value="2" <?= $adherent['Id_Salle']==2?'selected':''; ?>>Salle 2</option>

<option value="3" <?= $adherent['Id_Salle']==3?'selected':''; ?>>Salle 3</option>

<option value="4" <?= $adherent['Id_Salle']==4?'selected':''; ?>>Salle 4</option>

</select>

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