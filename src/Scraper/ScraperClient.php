<?php

namespace B3none\BeenClaimed\Scraper;

class ScraperClient
{
    /**
     * @var string
     */
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getHTML()
    {
        return shell_exec("node src/Scraper/Runner/runner.js '$this->url' 1000");
    }
}