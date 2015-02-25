<?php namespace Leyo\Ussd;

use Illuminate\Support\ServiceProvider;

class UssdServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('leyo/ussd','ussd');
		include __DIR__ . '/../../routes.php';
//		$this->commands(
//			//'command.ussd.controller'
//			//'command.ussd.routes',
//			//'command.ussd.migration'
//		);

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app['ussd'] = $this->app->share(function($app)
		{
			return new Ussd;
		});

//		$this->app->bind('command.ussd.controller', function ($app) {
//			return new UssdcontrollerCommand($app);
//		});
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Ussd', 'Leyo\Ussd\Facades\Ussd');
		});

//		$this->app->bind('command.ussd.routes', function ($app) {
//			return new RoutesCommand($app);
//		});

//		$this->app->bind('command.ussd.migration', function ($app) {
//			return new MigrationCommand($app);
//		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
//		return array(
//			'command.ussd.controller',
//			'command.ussd.routes',
//			'command.ussd.migration'
//		);
		return array();
	}

}
