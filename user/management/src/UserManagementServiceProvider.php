<?php

namespace User\Management;

use Illuminate\Support\ServiceProvider;

class UserManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register your package routes
        include __DIR__.'/routes.php';
        $this->app->make('User\Management\UserController');
    }
}
