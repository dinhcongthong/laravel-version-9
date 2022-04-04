<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TGDD
{

    public function scrape()
    {
        $url = 'https://www.thegioididong.com/dtdd';
        $client = new Client();
        $crawler = $client->request('GET', $url);

        
    }
}