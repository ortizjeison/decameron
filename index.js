const express = require('express');
const cors = require('cors');
const app = express();
let mysql = require('mysql');

app.use(cors());
app.use(express.json());

//Port config
const port = 8080;
app.listen(port, () => {
    console.log(`Corriendo en el puerto: ${port}`)
});


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


app.get('/dishes', (req, res) => {
    conn.query('SELECT * FROM platillo_compra', function(err, result) {
        if (err) throw err;
        res.json({
            dishes: result
        });
    });
});

app.post('/dishes', (req, res) => {
    conn.query('INSERT INTO platillo_compra (usuarioID, platilloID, fecha) VALUES (?, ?, ?);', [req.query['usuarioID'], req.query['platilloID'], req.query['fecha']],
        function(err, result) {
            if (err) throw err;
        });

    res.sendStatus(200);
});