<?php

namespace Source\Ad;

use Illuminate\Support\ServiceProvider;

class AdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /**
         * Publish
         */
        $this->publishes([__DIR__.'/public' => public_path('source')],'public');
        // 
        $this->loadViewsFrom(__DIR__.'/views', 'ad');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__ . '/routes.php';
        $this->app->make('Source\Ad\Controllers\AdController');
    }
}
