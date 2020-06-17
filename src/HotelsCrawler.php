<?php


namespace Khazhinov\HotelsCrawler;

use Khazhinov\HotelsCrawler\Interfaces\HotelsCrawlerInterface;

class HotelsCrawler implements HotelsCrawlerInterface
{
    /**
     * The HotelsCrawler library version.
     *
     * @var string
     */
    const VERSION = '0.1';

    public function testFunction()
    {
        return 'test';
    }
}
