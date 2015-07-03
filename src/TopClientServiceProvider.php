<?php
namespace Orzcc\TopClient;

use Illuminate\Contracts\Foundation\Application;
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
        $this->publishes([$source => config_path('taobaotop.php')]);
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
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function registerFactory(Application $app)
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
    protected function registerManager(Application $app)
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