<?php

header('Content-Type: application/json');
include_once dirname(__FILE__) . '/resources/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__) . '/resources/lib/culqi.php';

$SECRET_KEY = '';
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$culqi->Charges->create(
  array(
    "ammount" => $_POST['precio'],
    "capture" => true,
    "currency_code" => "PEN",
    "description" => $_POST['producto'],
    "email" => $_POST['email'],
    "installments" => 0,
    "source_id" => $_POST['token']

  )
);

echo "exito";

exit;
