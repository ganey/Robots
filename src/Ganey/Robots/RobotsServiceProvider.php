<?php namespace Ganey\Robots;

use Illuminate\Support\ServiceProvider;

class RobotsServiceProvider extends ServiceProvider
{
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->registerRobots();

    $this->app->alias('robots', 'Ganey\Robots\Robots');
  }

  /**
   * Register the HTML builder instance.
   *
   * @return void
   */
  protected function registerRobots()
  {
    $this->app->singleton('robots', function ($app) {
      return new Robots();
    });
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return ['robots', 'Ganey\Robots\Robots'];
  }

}