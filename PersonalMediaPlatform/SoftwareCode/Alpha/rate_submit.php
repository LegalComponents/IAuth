<?php

/*
 * Copyright (c) 2014, Samuel Colbran <contact@samuco.net>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 
 * Redistributions of source code must retain the above copyright notice, this
 * list of conditions and the following disclaimer.
 
 * Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

$url 	 = $_POST['url'];
$user_id = $_POST['user'];

/*
 * Create a new row in the SQL database
 */

// Connect to SQL
define('INCLUDE_CHECK',true);
require 'connect.php';

// Find the database post identifier for the URL
$url     = mysql_real_escape_string($url);
$result  = mysql_fetch_assoc(mysql_query("
			 SELECT post_id
			 FROM post
			 WHERE post_url = '$url'));
if ($result)
{
	$post_id  = $result['post_id'];
	$round    = 0;
	$rating   = 0;

	// Create the new row
	$user_id = (int)mysql_real_escape_string($user_id);
	mysql_query("INSERT INTO rating(post_id, user_id, round, rating) VALUES($post_id, $user_id, $round, $rating)");
}
else // Invalid URL
{
}

/*
 * Redirect to ...
 */
header( 'Location: '.$url);


?>