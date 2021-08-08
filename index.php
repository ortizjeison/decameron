<?php
require_once 'vendor/autoload.php';

$client = new \Contentful\Delivery\Client('LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk', 'zdo3yvufu0j6', 'master');

//$entry = $client->getEntry('1Wdl56SY9aUh9LEntmmUnt');
//echo $entry->getName();

//Le indicamos la entidad que vamos a consultar
$query = new \Contentful\Delivery\Query();
$query->setContentType('plan');

//Las recibimos
$Plan = $client->getEntries($query);

//Las recorremos todas
foreach ($Plan as $plan) {

    //Extraemos la propiedad que queramos de ellas
    echo("Plan: ".$plan['name'].":");
    echo("<br>");
 
    //Recorremos el json de las fotos y mostramos una a una
    foreach($plan['photos'] as $p){
        echo($p);
        echo("<br>");
    }
    echo("<br>");
}

?>