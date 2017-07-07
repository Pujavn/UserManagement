<?php

namespace User\Management\Providers;

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
        $this->loadViewsFrom(__DIR__.'/../views/user', 'userIndex');
        $this->loadViewsFrom(__DIR__.'/../views/user', 'new');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register your package routes
        include realpath(__DIR__ . '/../../config/routes.php');
        $this->app->make('User\Management\Controllers\UserController');
    }
}
