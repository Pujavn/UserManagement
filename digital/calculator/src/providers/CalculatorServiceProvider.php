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
		include realpath(__DIR__ . '/../../config/routes.php');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->make('Digital\Calculator\Controllers\CalculatorController');
		$this->loadViewsFrom(realpath(__DIR__ . '/../views'), 'calculator');
	}

}
