<?php

require_once 'vendor/autoload.php';

$client = new \Contentful\Delivery\Client('LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk', 'zdo3yvufu0j6', 'master');


$entries = $client->getEntries();
echo($entries);


//$entry = $client->getEntry('5O7jJXc2OBTm93iiZYHGoP');
//echo $entry->getName();

?>