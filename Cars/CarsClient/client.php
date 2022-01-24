<?php
try {
$client = new SoapClient(null, array(
'uri'=>'http://localhost:8080/Cars/Cars/',
'location'=>'http://localhost:8080/Cars/Cars/service-automoviles.php',
'trace'=>1
));
  $auth_params = new stdClass();
  $auth_params->username = "ies";
  $auth_params->password = "daw";
  $header_params = new SoapVar($auth_params,SOAP_ENC_OBJECT);
  $header = new SoapHeader('https://marmpi4.ddns.net/cars_service/service-automoviles.php', 'authenticate', $header_params, false);
  $client->__setSoapHeaders(array($header));
} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}
?>
