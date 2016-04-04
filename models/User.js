var bcrypt = require('bcrypt-nodejs');
var crypto = require('crypto');
var mongoose = require('mongoose');
var fs = require('fs-extra');
var userSchema = new mongoose.Schema({
  email: { type: String, lowercase: true, unique: true },

  login_count: { type: Number, default: 0 },
  active: { type: Boolean, default: true },
  file: { type: Number },
  google: String,
  github: String,
  tokens: Array,

  profile: {
    name: { type: String, default: '' },
    gender: { type: String, default: '' },
    location: { type: String, default: '' },
    website: { type: String, default: '' },
    picture: { type: String, default: '' },
    profile_link: {type: String, default: '' },
    accounts: {
      google: { type: Boolean, default: false},
      github: { type: Boolean, default: false}
    }
  }
}, { timestamps: true });

userSchema.methods.putFile = function() {
  if(this.google)
    this.profile.accounts.google = true
  else
    this.profile.accounts.google = false
  if(this.github)
    this.profile.accounts.github = true
  else
    this.profile.accounts.github = false

  var strJson = JSON.stringify( this.profile );
  fs.writeFileSync('./profiles/'+String("00000" + this.file ).slice(-5)+'.json', strJson);
};

userSchema.methods.getFile = function() {
  var strJson = fs.readFileSync('./profiles/'+String("00000" + this.file).slice(-5)+'.json');
  return strJson;
};

userSchema.methods.gravatar = function(size) {
  if (!size) {
    size = 200;
  }
  if (!this.email) {
    return 'https://gravatar.com/avatar/?s=' + size + '&d=retro';
  }
  var md5 = crypto.createHash('md5').update(this.email).digest('hex');
  return 'https://gravatar.com/avatar/' + md5 + '?s=' + size + '&d=retro';
};

var User = mongoose.model('User', userSchema);

module.exports = User;