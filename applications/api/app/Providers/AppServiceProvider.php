<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //if (!\App::environment('production')) {
         //   \URL::forceSchema('https');
        //} 
        //$this->app['request']->server->set('HTTPS', true);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //   $this->app->bind('path.public', function() {
        //    return base_path().'/public_html';
        //});
    }
}
