<?php
require __DIR__ . '/../vendor/autoload.php';

$crawler = new Smochin\Instagram\Crawler();

$media = $crawler->getMediaByUser('cclairekuoo');
//$media = $crawler->getMediaByTag('php');
var_dump($media);exit;