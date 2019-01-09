<?php

namespace Patrixsmart\Mailfast;

use Illuminate\Support\ServiceProvider;

class MailfastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        $this->loadViewsFrom(__DIR__.'/resources/views','mailfast');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    
        $this->mergeConfigFrom(
            __DIR__.'/config/mailfast.php', 'mailfast'
        );
    
        $this->publishes([
            __DIR__.'/config/mailfast.php' => config_path('mailfast.php'),
            __DIR__.'/console/commands' => app_path('console/commands')
        ],'mailfast');

        // $this->publishes([
        //     __DIR__.'/config/mailfast.php' => config_path('mailfast.php'),
        // ], 'config');


        // $this->publishes([
        //     __DIR__.'/path/to/assets' => public_path('vendor/courier'),
        // ], 'public');


        // $this->publishes([
        //     __DIR__.'/../database/migrations/' => database_path('migrations')
        // ], 'migrations');

        
        // $this->publishes([
        //     __DIR__.'/path/to/views' => resource_path('views/vendor/courier'),
        // ]);
    
    
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
