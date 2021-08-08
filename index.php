<?php
require_once 'vendor/autoload.php';

$client = new \Contentful\Delivery\Client('LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk', 'zdo3yvufu0j6', 'master');

//$entry = $client->getEntry('1Wdl56SY9aUh9LEntmmUnt');
//echo $entry->getName();

$query = new \Contentful\Delivery\Query();
$query->setContentType('plan');

$Plan = $client->getEntries($query);

foreach ($Plan as $plan) {

    foreach($Photo as $p){
        echo($plan['photos'][$p]);
    }

    hola
    //print_r($plan['photos']);

}

?>