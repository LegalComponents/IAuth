# IAuth
Legal research team repository

See: http://iauth.github.io/IAuth

Project Concept: Create lowest common identity module for account that works across boundaries for individual control of personal data and authorization permissions management.  

Goal: Create an open modular components that people can use for their profile and account management of authorizations. The authorizations will be the new way we create dynamic contracts and will replace the broken privacy policy and terms-conditions. 

Use case: works for UnWorkshop.

Some ideas for alpha step to start this project:


* need an independent anchor of "identity" in the context and "domain" of our system (UnWorkshop in this case). This is an "account".


* need it to be simple. Not a framework of platform. Just the rudiments.  I'll add reasons we discussed later.


* One account per human in our system because we need the ratings to have meaning. Not double ratings with two accounts - or triple or more.


* each account needs to exist at a URL.

* for now, to keeping real simple, we should have two basic files per user. These should be text files in UTF-8 encoding.  Probably just JSON structured data for now.  This is where we keep the sense of identity from session to session and how we create an admin page for each user.


* the two files are for two different things: 1) a Profile (which will be accessible via the web via a browser rendering html5, and 2) an Account (which is not intended to be directly accessed by the public via the web but should be more protected in some way. this is just for the user to see. It features the then current OAuth 2 integrations for the user. But for now we can just have it show a single number that increases by 1 every time the user logs in. That way the "account page" is seen to be live and informative.


* for identifiers, let's: 1) name the user account a string of date of first login / account creation and then a number starting at A001.  For date use UTC date format: 2016-02-17. If I was third to sign up today my account # would be: 2016-02-17-A003


** first step is just make a single file with the account # per user and add the profile and account info all into the same single file. Keep it simple.

** next steps: pull the name and link to profile from the IDP so we can add user name from GitHub and Google business apps email or gmail from Google.


# Further Notes on Code Development Approach

It is an basic library/ set of code to manage online identity in a better way.

It gives you a complete view of all the Identity Service Providers (IDP) that you have connected to the service and list of all the scopes that you have currently authorized with each respective service.

It also provides you the freedom to revoke access to an IDP that you have already connected. This way you are in total control of what the service can access and not.
