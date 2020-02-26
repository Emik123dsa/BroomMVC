<?php 

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;

use Engine\Core\Router\Router;

class Provider extends AbstractProvider {
/**
 * serviceName
 *
 * @var string
 */
    public $serviceName = 'router'; 
/**
 * init
 *
 * @return void
 */
    public function init() {

        $router = new Router('http://localhost/');
        
        $this->di->set($this->serviceName, $router);

    }
}

?>