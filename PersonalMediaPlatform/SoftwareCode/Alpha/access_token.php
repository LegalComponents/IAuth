<?php

$client_id     = '';
$client_secret = '';
$redirect_uri  = '';

if (isset($_GET['code'])) {
	$curl = curl_init( "https://public-api.wordpress.com/oauth2/token" );
	curl_setopt( $curl, CURLOPT_POST, true );
	curl_setopt( $curl, CURLOPT_POSTFIELDS, array(
	    'client_id' => $client_id,
	    'redirect_uri' => $redirect_uri,
	    'client_secret' => $client_secret,
	    'code' => $_GET['code'], // Code from the previous request
	    'grant_type' => 'authorization_code'
	) );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
	$auth = curl_exec( $curl );
	echo $auth;

} else {
	header( 'Location: https://public-api.wordpress.com/oauth2/authorize?client_id='.$client_id.'&redirect_uri='. $redirect_uri.'&response_type=code');
}


?>