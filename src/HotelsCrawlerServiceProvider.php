<?php


namespace Khazhinov\HotelsCrawler;

use Illuminate\Support\ServiceProvider;

class HotelsCrawlerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishing();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
        $this->bindInstance();
        $this->registerAliases();
    }

    /**
     * Setup the configuration for HotelsCrawler.
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/hotels-crawler.php', 'hotels-crawler'
        );
    }

    /**
     * Bind the HotelsCrawler instance to the application.
     *
     * @return void
     */
    protected function bindInstance()
    {
        $this->app->bind(
            'Khazhinov\HotelsCrawler\Interfaces\HotelsCrawlerInterface',
            'Khazhinov\HotelsCrawler\HotelsCrawler'
        );
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/hotels-crawler.php' => $this->app->configPath('hotels-crawler.php'),
            ], 'hotels-crawler-config');
        }
    }

    /**
     * Register the package's aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $this->app->alias(
            'Khazhinov\HotelsCrawler\Interfaces\HotelsCrawlerInterface',
            'laravel-hotels-crawler'
        );
    }
}
