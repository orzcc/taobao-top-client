<?php
namespace Orzcc\TopClient\Factories;

use TopClient\TopClient;

class TopClientFactory
{
    /**
     * Make a new topclient client.
     *
     * @param string[] $config
     *
     * @return TopClient
     */
    public function make(array $config)
    {
        $config = $this->getConfig($config);
        return $this->getClient($config);
    }
    /**
     * Get the configuration data.
     *
     * @param string[] $config
     *
     * @throws \InvalidArgumentException
     *
     * @return string[]
     */
    protected function getConfig(array $config)
    {
        if (!array_key_exists('app_key', $config)
            || !array_key_exists('app_secret', $config)) {
            throw new \InvalidArgumentException('The top client requires api keys.');
        }
        return array_only($config, ['app_key', 'app_secret', 'format']);
    }

    /**
     * Get the topclient client.
     *
     * @param string[] $auth
     *
     * @return CloudsearchClient
     */
    protected function getClient(array $config)
    {
        $c = new TopClient;
        $c->appkey = $config['app_key'];
        $c->secretKey = $config['app_secret'];
        $c->format = isset($config['format']) ? $config['format'] : 'json';
        return $c;
    }
}