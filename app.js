let mysql = require('mysql');
const express = require('express')
const cors = require('cors')

const path = require('path');

const { json, urlencoded } = express
const app = express()

const host = process.env.IP || '0.0.0.0'
const port = process.env.PORT || 3000

app.use(json())
app.use(urlencoded({ extended: false }))

const corsOptions = { origin: '*', optionsSuccessStatus: 200 }
app.use(cors(corsOptions))


let conn = mysql.createConnection({
    host: 'decameron-reservas.czyhoxxyaeya.us-east-1.rds.amazonaws.com',
    user: 'admin',
    password: 'adminadmin',
    database: 'decamerondb'
});

connectBD => {
    conn.connect(function(err) {
        if (err) throw err;
        console.log('Entramos deibi');
    });
    return conn;
}

app.get('/GetOrders', (req, res) => {
    conn.query('SELECT * FROM platillo_compra', function(err, result) {
        if (err) throw err;
        res.json({
            dishes: result
        });
    });
});

app.post('/PostOrder', (req, res) => {
    conn.query('INSERT INTO platillo_compra (usuarioID, platilloID, fecha) VALUES (?, ?, ?);', [req.query['usuarioID'], req.query['platilloID'], req.query['fecha']],
        function(err, result) {
            if (err) throw err;
        });

    res.sendStatus(200);
});

//app.use('/home', (req, res) =>  { res.sendFile(path.join(__dirname + '/src/html/index.html')); })
//app.use('/', (req, res) => { res.send(`I Love Docker & Kubernetes & NodeJs`); })

app.listen(port, host, () => { console.log(`Server listening on port ${port} in the host ${host}`); })