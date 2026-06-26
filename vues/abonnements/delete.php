<?php

require_once '../../app/controllers/AbonnementController.php';

$controller = new AbonnementController();

if (isset($_GET['id'])) {
    $controller->delete($_GET['id']);
}

header("Location: index.php");
exit();