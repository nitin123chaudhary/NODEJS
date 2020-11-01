const express = require('express');
const app = express();

// body parser for taking my form data
var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
app.use(bodyParser.json());

app.set('view engine','ejs');

app.listen(3000,()=>{console.log('Server s running on port 3000')});

app.use(require('./routers/admin'));

