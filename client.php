<?php
$options = \Contentful\Delivery\ClientOptions::create()
    ->usingPreviewApi()
    ->withDefaultLocale(string $defaultLocale = null)
    ->withHost(string $host)
    ->withLogger(Psr\Log\LoggerInterface $logger)
    ->withCache(Psr\Cache\CacheItemPoolInterface $cache, bool $autoWarmup = false, bool $cacheContent = false)
    ->withHttpClient(GuzzleHttp\Client $client)
    ->withoutMessageLogging()
;

$client = new \Contentful\Delivery\Client(
    string $accessToken = 'LxFo-33yjCtikr2f6uDVEgDab7vQNjmpO2cpQb9Azhk',
    string $spaceId = 'zdo3yvufu0j6',
    string $environmentId = 'master',
    ClientOptions $options = null
);

?>