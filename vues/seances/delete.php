<?php

require_once '../../app/Controllers/SeanceController.php';

$controller = new SeanceController();

if(isset($_GET['id']))
{
    $controller->delete($_GET['id']);
}

header("Location: index.php");
exit();