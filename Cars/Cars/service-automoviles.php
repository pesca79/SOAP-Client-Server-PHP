<?php
include 'GestionAutomoviles.php';
$soap = new SoapServer(null, array('uri' => 'https://marmpi4.ddns.net/cars_server/GestionAutomoviles.php'));
$soap->setClass('GestionAutomovilesAuth');
$soap->handle();
?>
