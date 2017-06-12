<?php

namespace CentsforChange\StripeConnect;

use Illuminate\Support\ServiceProvider;

class StripeConnectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
       $this->publishes([
            __DIR__ . '../config/stripe_connect.php' => config_path('stripe_connect.php'),
        ], 'config');
        $this->loadRoutesFrom(__DIR__.'../config/routes.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
