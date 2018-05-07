<?php

namespace SKAgarwal\SweetAlert;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SweetAlert', function ($app) {
            return new SweetAlert();
        });
    }
    
    /**
     * Boot
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views/', 'sweet-alert');
        
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/sweet-alert'),
        ]);
    }
}
