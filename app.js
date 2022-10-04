const express = require('express');
const path = require('path');
const mongoose = require('mongoose');
const Place =  require('./models/place')

mongoose.connect('mongodb://localhost:27017/gsu-foody');

const db = mongoose.connection;
db.on("error", console.error.bind(console, "connection error:"));
db.once("open", () => {
    console.log("Database connected");
});

const app = express();

app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'))

app.use(express.urlencoded({ extended: true}))
app.get('/', (req,res) => {
    res.render('home')
})

app.get('/places', async (req, res) => {
    const places = await Place.find({});
    res.render('places/index', {places});
})

app.get('/places/addNew', (req,res) => {
    res.render('places/addNew');
})

app.post('/places', async (req, res) => {
    const place = new Place(req.body.place);
    await place.save();
    res.redirect(`/places/${place._id}`);
})

app.get('/places/:id', async (req, res) => {
    const place = await Place.findById(req.params.id);
    res.render('places/show', {place});
})

app.get('/places/:id/edit', async (req, res) => {
    const place = await Place.findById(req.params.id);
    res.render('places/edit', {place});
})

app.listen(3000, () => {
    console.log('Serving on port 3000')
})