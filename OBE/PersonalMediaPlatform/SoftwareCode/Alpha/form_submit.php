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

$site_url   = '';
$access_key = '';

/* 
 * Post parameters
 */

$postTitle      = $_POST['title'];      // html
$postContent    = $_POST['content'];    // html
$postTags       = $_POST['tags'];       // string
$postCategories = 'Proposed Project';   // string

// Extra
// See https://developer.wordpress.com/docs/api/1/post/sites/%24site/posts/new/
$postDate       = ''; // iso 8601 date
$postExcerpt    = ''; // html
$postSlug       = ''; // string
$postAuthor     = ''; // string
$postPublicize  = ''; // bool
$postStatus     = ''; // publish, private, draft, pending
$postPassword   = ''; // string
$postParent     = ''; // int
$postType       = ''; // string
$postFormat     = ''; // standard, aside, char, gallery, ...
$postImage      = ''; // string
$postMedia      = ''; // media
$postMeta       = ''; // array
$postSticky         = false; // sticky the post
$postEnableLikes    = true;  // enable likes
$postEnableSharing  = true;  // enable sharing
$postEnablePings    = true;  // enable pings
$postEnableComments = true;  // enable comments

/*
 * Create a new WordPress post
 */
$options  = array (
   'http' => 
   array (
      'ignore_errors' => true,
      'method' => 'POST',
      'header' => array (
         0 => 'authorization: bearer '.$access_key,
         1 => 'Content-Type: application/x-www-form-urlencoded',
      ),
      'content' => http_build_query(   
         array (
                 'title' => $postTitle,
               'content' => $postContent,
                  'tags' => $postTags,
            'categories' => $postCategories,
                  'date' => $postDate,
               'excerpt' => $postExcerpt,
                  'slug' => $postSlug,
                'author' => $postAuthor,
             'publicize' => $postPublicize,
                'status' => $postStatus,
              'password' => $postPassword,
                'parent' => $postParent,
                  'type' => $postType,
                'format' => $postFormat,
        'featured_image' => $postImage,
                 'media' => $postMedia,
                  'meta' => $postMeta,
                'sticky' => $postSticky,
                 'likes' => $postEnableLikes,
               'sharing' => $postEnableSharing,
                  'ping' => $postEnablePings,
              'comments' => $postEnableComments
         )
      ),
   ),
);

$site_url = 'a2j.legalhackathon.org';
$context  = stream_context_create( $options );
$response = file_get_contents(
   'https://public-api.wordpress.com/rest/v1/sites/'.$site_url.'/posts/new/',
   false,
   $context
);
echo $response;
$response = json_decode( $response );
$postURL  = $response->URL;

/*
 * Create a new row in the SQL database
 */
//$URL
//$user_id = $_POST['user'];

// Connect to SQL
define('INCLUDE_CHECK',true);
require 'connect.php';

$postTitle = mysql_real_escape_string($postTitle);
$postURL   = mysql_real_escape_string($postURL);

//Add a new post entry into the database
mysql_query("INSERT INTO posts(post_title, post_url) VALUES('$postTitle', '$postURL')");

/*
 * Redirect to the WordPress post
 */
echo $response;
echo $URL;
header( 'Location: '.$URL);


?>