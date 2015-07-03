<?php
namespace Orzcc\TopClient;

use Orzcc\TopClient\Factories\TopClientFactory;
use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

class TopClientManager extends AbstractManager
{
    protected $factory;
    
    public function __construct(Repository $config, TopClientFactory $factory)
    {
        parent::__construct($config);
        $this->factory = $factory;
    }
    
    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }
  
    protected function getConfigName()
    {
        return 'taobaotop';
    }
   
    public function getFactory()
    {
        return $this->factory;
    }
}