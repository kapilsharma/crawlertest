<?php

require 'vendor/autoload.php';

use Phpreboot\Crawler;

//  Create a new Goutte client instance
$crawler = new Crawler();

//  Hackery to allow HTTPS
$guzzleclient = new \GuzzleHttp\Client([
    'timeout' => 60,
    'verify' => false,
]);

//  Hackery to allow HTTPS
$crawler->setClient($guzzleclient);

//  Make a GET request (Create DOM from URL or file)
$request = $crawler->request('GET', 'https://www.facebook.com');

//  Filter the DOM by calling an anonymous function on each node (Find all images)
$request->filter('img')->each(function ($node) {
    echo $node->attr('src') . '<br>';
});

//  (Find all links)
$request->filter('a')->each(function ($node) {
    echo $node->attr('href') . PHP_EOL;
});