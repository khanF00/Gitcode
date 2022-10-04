const mongoose  = require('mongoose');
const Schema = mongoose.Schema;

const PlaceSchema =  new Schema({
    title: String,
    address: String,
    type: String,
    description: String
});

module.exports = mongoose.model('Place', PlaceSchema);