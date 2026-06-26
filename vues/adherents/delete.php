<?php

require_once '../../app/controllers/AdherentController.php';

$controller = new AdherentController();

if (isset($_GET['id'])) {
    $controller->delete($_GET['id']);
}

header("Location: index.php");
exit();