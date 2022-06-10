<?php

namespace Vheins\LaravelUiKitComponents;

use Illuminate\Support\ServiceProvider;

class LaravelUiKitComponentsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'uk');

        $this->publishes(
            [__DIR__ . '/../config/laravel-uikit-components.php' => config_path('laravel-uikit-components.php')],
            ['laravel-uikit-components', 'laravel-uikit-components:config']
        );

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-uikit-components')],
            ['laravel-uikit-components', 'laravel-uikit-components:views']
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-uikit-components.php', 'laravel-uikit-components');
    }
}
