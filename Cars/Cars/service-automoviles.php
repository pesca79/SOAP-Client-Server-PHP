<?php
include 'GestionAutomoviles.php';
//Server en Raspberry PI4 en otro server apache
$soap = new SoapServer(null, array('uri' => 'https://marmpi4.ddns.net/cars_server/GestionAutomoviles.php'));
$soap->setClass('GestionAutomovilesAuth');
$soap->handle();
?>
