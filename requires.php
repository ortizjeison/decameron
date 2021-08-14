<?php
require_once 'vendor/autoload.php';
include("includes/top_nav.php");
include("includes/connection.php");
?>

<body>

<?php

// PLANES
//Le indicamos la entidad que vamos a consultar
$query = new \Contentful\Delivery\Query();
$query->setContentType('plan');

//Las recibimos
$Planes = $client->getEntries($query);

//Las recorremos todas
/*foreach ($Planes as $plan) {

    echo('<div class="card" style="width: 18rem;">');
    echo('<img class="card-img-top" src="'.$plan['photos']['photo1'].'" alt="Card image cap">');
    echo('<h5 class="card-title">'.$plan['name'].'</h5>');
    echo('<p class="card-text">'.$plan['description'].'</p>');
    echo('</div>');
}*/

// HABITACIONES

$query = new \Contentful\Delivery\Query();
$query->setContentType('room');

//Las recibimos
$Rooms = $client->getEntries($query);

//Las recorremos todas
/*foreach ($Rooms as $room) {
    echo('<div class="card" style="width: 18rem;">');
    echo('<img class="card-img-top" src="'.$room['photos']['photo1'].'" alt="Card image cap">');
    echo('<h5 class="card-title">'.$room['name'].'</h5>');
    echo('<p class="card-text">'.$room['description'].'</p>');
    echo('</div>');
}*/

?>

</body>