<?php

namespace Crawler;

use Symfony\Component\DomCrawler\Crawler;

class RozetkaCrawler
{
    public function __construct()
    {

    }

    public function crawl()
    {
        $urlsToCrawl = $this->getUrlsToCrawl();

        foreach ($urlsToCrawl as $url) {
            $this->crawlPage($url);
        }
    }

    private function crawlPage($url)
    {
        $html = file_get_contents($url);
        $crawler = new Crawler($html);
        $price = $this->extractPrice($crawler);
        var_dump($price);
    }

    private function extractPrice($crawler)
    {
        $priceSpan = $crawler->filter('[itemprop="price"]');
        return intval(str_replace(' ', '', $priceSpan->text()));
    }

    private function getUrlsToCrawl()
    {
        return [
            'http://hard.rozetka.com.ua/Divoom_onbeat-500_white/p343415/',
            'http://rozetka.com.ua/agestar_sub_2o8/p270102/',
            'http://rozetka.com.ua/grandx_bt40g/p1675697/',
            'http://rozetka.com.ua/jeka_103_3g/p1989222/',
        ];
    }
}