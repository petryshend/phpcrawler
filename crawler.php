<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

$url = 'http://hard.rozetka.com.ua/Divoom_onbeat-500_black/p343395/?utm_medium=cpc&utm_source=Hotline_main&utm_campaign=speakers&utm_content=343395&utm_term=Divoom_onbeat-500_black';

$html = file_get_contents($url);

$crawler = new Crawler($html);

$priceSpan = $crawler->filter('span[itemprop="price"]');

var_dump($priceSpan->text());