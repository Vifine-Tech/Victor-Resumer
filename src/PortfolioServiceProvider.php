<?php

namespace VictorKipkoech\Portfolio;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PortfolioServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/portfolio.php', 'portfolio');
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'portfolio');
        
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        // Publish assets
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/portfolio.php' => config_path('portfolio.php'),
            ], 'portfolio-config');
            
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/portfolio'),
            ], 'portfolio-views');
            
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/portfolio'),
            ], 'portfolio-assets');
            
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'portfolio-migrations');
        }
    }
}