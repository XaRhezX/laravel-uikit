<?php

namespace Vheins\LaravelUiKitProvider\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapComponentsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'uk');

        $this->publishes(
            [__DIR__ . '/../../config/laravel-uikit.php' => config_path('laravel-uikit.php')],
            ['laravel-uikit', 'laravel-uikit:config']
        );

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/uk')],
            ['laravel-uikit', 'laravel-uikit:views']
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-uikit.php', 'laravel-uikit');
    }
}
