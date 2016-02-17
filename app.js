var express = require('express');
var util = require('util');
var session = require('express-session');
var bodyParser = require('body-parser');
var methodOverride = require('method-override');
var partials = require('express-partials');

// ===== config vars
var GITHUB_CLIENT_ID = process.env.GITHUB_CLIENT_ID;
var GITHUB_CLIENT_SECRET = process.env.GITHUB_CLIENT_SECRET;
var GOOGLE_CLIENT_ID = process.env.GOOGLE_CLIENT_ID;
var GOOGLE_CLIENT_SECRET = process.env.GOOGLE_CLIENT_SECRET;
var HOST = process.env.HOST;

// ===== login OAuth2 =>https://github.com/cfsghost/passport-github
var passport = require('passport');
var GitHubStrategy = require('passport-github2').Strategy;
var GoogleStrategy = require('passport-google-oauth').OAuth2Strategy;

// Passport session setup.
passport.serializeUser(function(user, done) {
  done(null, user);
});

passport.deserializeUser(function(obj, done) {
  done(null, obj);
});


// Use the GitHubStrategy within Passport.
passport.use(new GitHubStrategy({
    clientID: GITHUB_CLIENT_ID,
    clientSecret: GITHUB_CLIENT_SECRET,
    callbackURL: HOST+"/auth/github/callback"
  },
  function(accessToken, refreshToken, profile, done) {
    // asynchronous verification, for effect...
    process.nextTick(function () {
      return done(null, profile);
    });
  }
));

passport.use(new GoogleStrategy({
    clientID: GOOGLE_CLIENT_ID,
    clientSecret: GOOGLE_CLIENT_SECRET,
    callbackURL: HOST+"/auth/google/callback"
  },
  function(accessToken, refreshToken, profile, done) {
    process.nextTick(function () {
      return done(null, profile);
    });
  }
));

// Simple route middleware to ensure user is authenticated.
//   Use this route middleware on any resource that needs to be protected.  If
//   the request is authenticated (typically via a persistent login session),
//   the request will proceed.  Otherwise, the user will be redirected to the
//   login page.
function ensureAuthenticated(req, res, next) {
  if (req.isAuthenticated()) { return next(); }
  res.redirect('/login')
}

// ===== initialize app
var app = express();
app.set('port', (process.env.PORT || 3000));

// ===== configure Express
app.set('views', __dirname + '/views');
app.set('view engine', 'jade');
app.use(partials());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(methodOverride());
app.use(session({
  secret: 'qwerty keyboard',
  resave: false,
  saveUninitialized: false,
  cookie: { secure: 'auto' }
}))
// Initialize Passport!  Also use passport.session() middleware, to support
// persistent login sessions (recommended).
app.use(passport.initialize());
app.use(passport.session());
app.use(express.static(__dirname + '/public'));

app.use(function res_locals(req, res, next) {
  res.locals = {
    user: req.user,
  };
  return next();
});

function make_url(url){
  return HOST+url
}
// ===== routes

// GET /
app.get('/', function(req, res){
  res.render('index');
});

// GET /login
app.get('/login', function(req, res){
  if(req.user){res.redirect('/');}
  res.render('login', { user: req.user });
});

// GET /auth/github
app.get('/auth/github',
  passport.authenticate('github', { scope: [ 'user:email' ] }),
  function(req, res){
    // The request will be redirected to GitHub for authentication, so this
    // function will not be called.
  });

// GET /auth/google
app.get('/auth/google',
  passport.authenticate('google', { scope: [
    'https://www.googleapis.com/auth/plus.login',
    'https://www.googleapis.com/auth/plus.profile.emails.read' ] }),
  function(req, res){
    // The request will be redirected to Google for authentication, so this
    // function will not be called.
  });

// GET /auth/github/callback
app.get('/auth/github/callback',
  passport.authenticate('github', { failureRedirect: '/login' }),
  function(req, res, next) {
    var user = req.user;
    if(user){
      // db.User.create({ name: user.displayName, email: user.emails[0].value});
      res.redirect('/account');
    }
    else{
      res.redirect('/login');
    }
  });

// GET /auth/google/callback
app.get('/auth/google/callback',
  passport.authenticate('google', { failureRedirect: '/login' }),
  function(req, res, next) {
    var user = req.user;
    if(user){
      // db.User.create({ name: user.displayName, email: user.emails[0].value}).error();
      res.redirect('/account');
    }
    else{
      res.redirect('/login');
    }
  });

// GET /logout
app.get('/logout',
  function(req, res){
    req.logout();
    res.redirect('/');
  });

// GET /account
app.get('/account',
  ensureAuthenticated,
  function(req, res){
    res.render('account');
  });

app.listen( (process.env.PORT || 3000) , function(){
  console.log('Express server listening on port ' + (process.env.PORT || 3000));
});
