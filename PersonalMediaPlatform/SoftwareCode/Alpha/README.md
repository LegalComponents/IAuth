##Alpha

###Generating an Access Token
An access token needs to be created before the form can create access tokens on WordPress. This process only needs to be performed once per site (or less if you use the same WordPress app). You will first need to upload access_token.php to a publicly accessible location of your choice.

- Go to the [WordPress developer website](https://developer.wordpress.com/apps/)
- Click on 'Create a New Application'
- Enter 'http://**site**/access_token.php' in the **Redirect URL** field, where **site** is the location that you uploaded the php file to.
- Select 'Web' as the type.
- Fill out the remaining fields as appropriate.
- Click 'Create' at the bottom right.
 
- Copy down the Client ID and Client Secret. Open the access_token.php file and set the parameters at the top of the file. Enter 'http://**site**/access_token.php' in the **redirect_uri** field, where **site** is the location that you uploaded the php file to.

- Save the file and open the 'http://**site**/access_token.php' location in a web browser. 

- Login to wordpress.com, select the appropriate site, authorise the application and login to the site. If successful, a JSON string containing the access_token should be visible. Copy the access token and paste it into the $access_key variable in the form_submit.php file.

###WordPress Post
Before you can setup the form to create WordPress posts, you need an access token. See the above 'Generating an Access Token'

The form_submit.php file accepts a HTML form with several parameters including title, content, tags, and categories. It then creates a new post on a WordPress site of your choice and enters the post in the associated SQL database.

Don't forget to put the WordPress site address into the $site_url variable inside the form_submit.php file. E.g.
```
$site_url = 'wordpress.example.org';
```

An example form has been included in NewProject.html

###Post Ratings
This functionality has not been fully implemented, but the general concept is available in the rate_submit.php and form_submit.php files. 

An example form has been included in Rate.html

