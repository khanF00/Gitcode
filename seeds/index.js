const mongoose = require('mongoose');
const cities = require('./cities');
const { places, descriptors } = require('./seedHelpers');
const Place = require('../models/place');

mongoose.connect('mongodb://127.0.0.1:2701/gsu-foody');

const db = mongoose.connection;
db.on("error", console.error.bind(console, "connection error:"));
db.once("open", () => {
    console.log("Database connected");
});

const sample = array => array[Math.floor(Math.random() * array.length)];

const seedDB = async () => {
    await Place.deleteMany({});
    for (let i = 0; i < 50; i++) {
        const random1000 = Math.floor(Math.random() * 1000);
        const place = new Place({
            location: `${cities[random1000].city}, ${cities[random1000].state}`,
            title: `${sample(descriptors)} ${sample(places)}`
        })
        await place.save();
    }
}

seedDB().then(() => {
    mongoose.connection.close();
})

// const seedDB = async () => {
//     await Place.deleteMany({});
//     const c = new Place({ title: 'puple'});
//     await c.save();
// }