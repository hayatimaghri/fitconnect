<?php

require_once '../../app/Controllers/AdherentController.php';
require_once '../../app/Controllers/AbonnementController.php';
require_once '../../app/Controllers/SeanceController.php';
require_once '../../app/Controllers/SalleController.php';

$adherentController = new AdherentController();
$abonnementController = new AbonnementController();
$seanceController = new SeanceController();
$salleController = new SalleController();

$totalAdherents = count($adherentController->index());
$totalAbonnements = count($abonnementController->index());
$totalSeances = count($seanceController->index());
$totalSalles = count($salleController->index());

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Dashboard FitConnect</title>

<link rel="stylesheet" href="../style.css">
<?php include "../header.php"; ?>
</head>

<body>



<section class="welcome">

<h2>Bienvenue dans votre Tableau de Bord</h2>

<p>Gérez facilement les adhérents, abonnements, séances et salles.</p>

</section>

<section class="cards">

<div class="card">

<h3>👤 Adhérents</h3>

<p><?= $totalAdherents ?></p>

</div>

<div class="card">

<h3>📅 Abonnements</h3>

<p><?= $totalAbonnements ?></p>

</div>

<div class="card">

<h3>🏋️ Séances</h3>

<p><?= $totalSeances ?></p>

</div>

<div class="card">

<h3>🏢 Salles</h3>

<p><?= $totalSalles ?></p>

</div>

</section>

<footer>

<p>© 2026 FitConnect - Application de gestion des salles de sport</p>

</footer>

</body>

</html>