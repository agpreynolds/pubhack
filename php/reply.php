<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php/libraries/twitter/TwitterAPIExchange.php');
$config = require_once($_SERVER['DOCUMENT_ROOT'] . '/php/configuration/twitter.php');

$url = "https://api.twitter.com/1.1/statuses/update.json";
$postField = array(
	'status' => 'Hello World'
);

$requestMethod = 'POST';

$twitter = new TwitterAPIExchange($config);
$jsonResults = $twitter->setPostFields($postField)->buildOauth($url,$requestMethod)->performRequest();
var_dump($jsonResults);

?>