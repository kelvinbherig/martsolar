<?php

require '../vendor/autoload.php';

use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

MercadoPagoConfig::setAccessToken(
'SUA_ACCESS_TOKEN'
);

$dados = json_decode(
file_get_contents("php://input"),
true
);

$client = new PreferenceClient();

$preference = $client->create([
    "items" => [
        [
            "title" => $dados['produto'],
            "quantity" => 1,
            "currency_id" => "BRL",
            "unit_price" => (float)$dados['valor']
        ]
    ]
]);

echo json_encode([
    "link" => $preference->init_point
]);