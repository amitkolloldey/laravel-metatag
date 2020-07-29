<?php

namespace AmitKD\LaravelMetatag\Providers;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Publishing Package Config File
        $this->publishes([
            __DIR__.'/../../config/laravel-metatag.php' => config_path('laravel-metatag.php')
        ], 'config');

        // Includes Package Migrations
        $this->loadMigrationsFrom(__DIR__ .'/../../migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include_once(__DIR__ . '/../../helpers/helpers.php');
    }

}
