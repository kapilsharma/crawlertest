<?php
//Trying to parse naukri.com for testing purpose

require 'vendor/autoload.php';

use Phpreboot\Crawler;

$crawler = new Crawler();
$guzzleclient = new \GuzzleHttp\Client([
    'timeout' => 60,
    'verify' => false,
]);
$crawler->setClient($guzzleclient);

$domCrawler = $crawler->request('GET', 'https://login.naukri.com/nLogin/Login.php');

$form = $domCrawler->selectButton('Login')->form();
$form['USERNAME'] = 'email';
$form['PASSWORD'] = 'password';
$crawler2 = $crawler->submit($form);

$cookieJar = $crawler2->getCookieJar();

$cookieJar->

var_dump($crawler);