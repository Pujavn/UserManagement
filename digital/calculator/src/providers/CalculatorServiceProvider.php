<?php

namespace Digital\Calculator\Providers;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		include realpath(__DIR__ . '/../../config/routes.php');
		$this->app->make('Digital\Calculator\Controllers\CalculatorController');
	}

}
