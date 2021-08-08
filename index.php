<body>

</body>

<?php
include("includes/top_nav.php");

require_once 'vendor/autoload.php';

$client = new \Contentful\Delivery\Client('LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk', 'zdo3yvufu0j6', 'master');

//Le indicamos la entidad que vamos a consultar
$query = new \Contentful\Delivery\Query();
$query->setContentType('plan');

//Las recibimos
$Planes = $client->getEntries($query);

//Las recorremos todas
foreach ($Planes as $plan) {

    //Extraemos la propiedad que queramos de ellas
    echo("Plan: ".$plan['name'].":");
    echo("<br>");
 
    //Recorremos el array de las fotos y mostramos una a una
    foreach($plan['photos'] as $photo){
        echo($photo);
        echo("<br>");
    }
    echo("<br>");
}

?>