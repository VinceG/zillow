<?php

namespace examples;

$path = dirname(dirname(__FILE__));
require_once($path . '/vendor/autoload.php');

use Zillow\ZillowClient;

$client = new ZillowClient('xxxxx');

try {
	$client->GetSearchResults(['address' => '14506 Swiss Ln', 'citystatezip' => 'Truckee CA 96161']);
} catch(Exception $e) {
	echo $e->getMessage();
}

if($client->isSuccessful()) {
	echo 'OK';
	print_r($client->getResponse());
} else {
	echo $client->getStatusCode() . ':' . $client->getStatusMessage();
}