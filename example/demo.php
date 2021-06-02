<?php
require dirname(__DIR__).'/vendor/autoload.php';
$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];

// Find invalid urls
$scanner = new \Susucool\Scanner\Url\Scanner($urls);
$invalidUrls = $scanner->getInvalidUrls();

// Do something with invalid urls
print_r($invalidUrls);