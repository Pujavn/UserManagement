<?php

namespace User\Management\Providers;

use Illuminate\Support\ServiceProvider;

class UserManagementServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		include realpath(__DIR__ . '/../../config/routes.php');
		$this->loadViewsFrom(__DIR__ . '/../views/user', 'userIndex');
		$this->loadViewsFrom(__DIR__ . '/../views/user', 'new');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->make('User\Management\Controllers\UserController');
	}

}
