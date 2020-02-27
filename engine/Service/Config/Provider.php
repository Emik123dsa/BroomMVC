<?php 

namespace Engine\Service\Config;

use Engine\Service\AbstractProvider;
use Engine\Core\Config\Config; 

class Provider extends AbstractProvider 
{
    /**
     * serviceName for config
     *
     * @var string
     */

    public $serviceName = 'config';
    /**
     * init for config provider
     *
     * @return void
     */

    public function init() 
    {
        
        $data['main'] = Config::file('main');
        $data['database'] = Config::file('database');
        
        $this->di->set($this->serviceName, $data);
        
    }

}


?>