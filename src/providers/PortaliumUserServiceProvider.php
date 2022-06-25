<?php

namespace Portalium\User\Providers;

use Illuminate\Support\ServiceProvider;

class PortaliumUserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Portalium\User\Controllers\UserController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->loadRoutesFrom(__DIR__.'/../config/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'user');
        $this->publishes([
            __DIR__.'/views' => base_path( __DIR__.'/views/user'),
        ]);
    }
}
