<?php
require 'tmhOAuth.php'; // Get it from: https://github.com/themattharris/tmhOAuth

// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)

$connection = new tmhOAuth(array(
  'consumer_key' => 'EpxqdSQGMhxRnSoLkFUTiDU2T',
	'consumer_secret' => 'G1P2lZQczGV5nCkTVgXmCRxro43T3IQOYfsMgu9MYdFmcptGh4',
	'user_token' => ' 64402102-PluNimenW4wuFRH5BqIU0DvDVTiS6zaEPXYT5bzy5', //access token
	'user_secret' => 'PT0tA03LyytFwKUO6WwLOpA3q6KOFA6FaAVxaS5XVHenP' //access token secret
));

// set up parameters to pass
$parameters = array();

if ($_GET['count']) {
	$parameters['count'] = strip_tags($_GET['count']);
}

if ($_GET['screen_name']) {
	$parameters['screen_name'] = strip_tags($_GET['screen_name']);
}

if ($_GET['twitter_path']) { $twitter_path = $_GET['twitter_path']; }  else {
	$twitter_path = '1.1/statuses/user_timeline.json';
}

$http_code = $connection->request('GET', $connection->url($twitter_path), $parameters );

if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);

	if ($_GET['callback']) { // if we ask for a jsonp callback function
		echo $_GET['callback'],'(', $response,');';
	} else {
		echo $response;	
	}
} else {
	echo "Error ID: ",$http_code, "<br>\n";
	echo "Error: ",$connection->response['error'], "<br>\n";
}

// You may have to download and copy http://curl.haxx.se/ca/cacert.pem

///https://gist.github.com/planetoftheweb/5914179 ///https://www.youtube.com/watch?v=GQaPt-gQVRI&list=PL9-2beaTq93Q-0SuTpUr9c9P6NirxKohN&index=1