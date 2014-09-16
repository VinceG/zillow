<?php

namespace examples;

$path = dirname(dirname(__FILE__));
require_once($path . '/vendor/autoload.php');

use Zillow\ZillowClient;

$client = new ZillowClient('xxxxx');

try {
	$response = $client->GetPhotosById(19454424);
} catch(Exception $e) {
	echo $e->getMessage();
}

if($client->isSuccessful()) {
	echo 'OK';
	print_r($client->getResponse());

	/*
	Array
	(
	    [0] => http://photos1.zillowstatic.com/p_h/ISrbdvz6b0qgmb.jpg
	    [1] => http://photos2.zillowstatic.com/p_h/IS16rb4jeo59n6r.jpg
	    [2] => http://photos3.zillowstatic.com/p_h/ISrbdvz2cyico3.jpg
	    [3] => http://photos1.zillowstatic.com/p_h/IS16rb4jim7hr4z.jpg
	    [4] => http://photos2.zillowstatic.com/p_h/ISrbdvyyewa8pv.jpg
	    [5] => http://photos3.zillowstatic.com/p_h/IS16rb4jmk9pv37.jpg
	    [6] => http://photos1.zillowstatic.com/p_h/ISrbdvyugu24rn.jpg
	    [7] => http://photos2.zillowstatic.com/p_h/IS16rb4jqibxz1f.jpg
	    [8] => http://photos3.zillowstatic.com/p_h/ISrbdvyqiru0tf.jpg
	    [9] => http://photos1.zillowstatic.com/p_h/IS16rb4juge62zn.jpg
	    [10] => http://photos2.zillowstatic.com/p_h/ISrbdvymkplwv7.jpg
	    [11] => http://photos3.zillowstatic.com/p_h/IS16rb4jyege6xv.jpg
	    [12] => http://photos1.zillowstatic.com/p_h/ISrbdvyimndswz.jpg
	    [13] => http://photos3.zillowstatic.com/p_h/IS1fto3bxo3fd0j.jpg
	)
	*/


} else {
	echo $client->getStatusCode() . ':' . $client->getStatusMessage();
}