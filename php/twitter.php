<?php

require_once('tweet.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/php/libraries/twitter/TwitterAPIExchange.php');
$config = require_once($_SERVER['DOCUMENT_ROOT'] . '/php/configuration/twitter.php');

$url = "https://api.twitter.com/1.1/search/tweets.json";
$getField = '?q=firstworldproblems&count=20';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($config);
$jsonResults = $twitter->setGetField($getField)->buildOauth($url,$requestMethod)->performRequest();

$results = json_decode($jsonResults);
$statuses = $results->statuses;
$tweets = array();

foreach ($statuses as $tweet ) {
	$tweets[] = new tweet($tweet);
}

echo json_encode($tweets);

?>