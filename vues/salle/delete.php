<?php

require_once '../../app/controllers/SalleController.php';

$controller = new SalleController();

if (isset($_GET['id'])) {
    $controller->delete($_GET['id']);
}

header("Location: index.php");
exit();