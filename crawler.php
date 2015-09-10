<?php

require 'bootstrap.php';

use Symfony\Component\DomCrawler\Crawler;

$urls = [
    'http://hard.rozetka.com.ua/Divoom_onbeat-500_white/p343415/',
    'http://rozetka.com.ua/agestar_sub_2o8/p270102/',
    'http://rozetka.com.ua/grandx_bt40g/p1675697/',
    'http://rozetka.com.ua/jeka_103_3g/p1989222/',
];

foreach ($urls as $url) {
    $html = file_get_contents($url);
    $crawler = new Crawler($html);
    $priceSpan = $crawler->filter('[itemprop="price"]');
    $price = intval(str_replace(' ', '', $priceSpan->text()));
    $totalPrice += $price;
}
