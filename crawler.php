<?php

use Crawler\RozetkaCrawler;

require 'bootstrap.php';

$rozetkaCrawler = new RozetkaCrawler();
$rozetkaCrawler->crawl();