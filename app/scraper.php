<?php
require __DIR__ . '/../vendor/autoload.php';

$medias = InstagramScraper\Instagram::getMedias('cclairekuoo');
var_dump($medias);exit;