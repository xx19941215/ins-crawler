<?php
require __DIR__ . '/../vendor/autoload.php';

$crawler = new Smochin\Instagram\Crawler();

$media = $crawler->getMediaByUser('instagram');

var_dump($media);exit;