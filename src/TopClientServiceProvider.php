<?php
namespace Orzcc\TopClient;

use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Support\ServiceProvider;

class TopClientServiceProvider extends ServiceProvider {
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }
    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/taobaotop.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('taobaotop.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('taobaotop');
        }
        $this->mergeConfigFrom($source, 'taobaotop');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFactory($this->app);
        $this->registerManager($this->app);
    }
    /**
     * Register the factory class.
     *
     * @param \Illuminate\Contracts\Foundation\Application | Laravel\Lumen\Application $app
     *
     * @return void
     */
    protected function registerFactory($app)
    {
        $app->singleton('topclient.factory', function ($app) {
            return new Factories\TopClientFactory();
        });
        $app->alias('topclient.factory', 'Orzcc\TopClient\Factories\TopClientFactory');
    }
    /**
     * Register the manager class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function registerManager($app)
    {
        $app->singleton('topclient', function ($app) {
            $config = $app['config'];
            $factory = $app['topclient.factory'];
            return new TopClientManager($config, $factory);
        });
        $app->alias('topclient', 'Orzcc\TopClient\TopClientManager');
    }
    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'topclient',
            'topclient.factory',
        ];
    }
}