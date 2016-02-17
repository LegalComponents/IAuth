'use strict';

const Waterline = require('waterline');

var Pet = Waterline.Collection.extend({

  identity: 'pet',
  connection: 'myLocalMySql',

  attributes: {
    name: 'string',
    breed: 'string'
  }
});


module.exports = Pet;
