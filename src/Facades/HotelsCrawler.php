<?php


namespace Khazhinov\HotelsCrawler\Facades;

use Illuminate\Support\Facades\Facade;

class HotelsCrawler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-hotels-crawler';
    }
}
