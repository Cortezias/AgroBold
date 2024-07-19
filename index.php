<?php
require 'config.php';
require 'app/controllers/ClienteController.php';

$controller = new ClienteController($pdo);
$controller->handleRequest();
?>
