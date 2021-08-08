<?php
require_once 'vendor/autoload.php';

$client = new \Contentful\Delivery\Client('LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk', 'zdo3yvufu0j6', 'master');

//$entry = $client->getEntry('1Wdl56SY9aUh9LEntmmUnt');
//echo $entry->getName();

foreach ($Plan as $plan) {
    echo $plan['photos'];
}

?>