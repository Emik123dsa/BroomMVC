<?php 

namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;
class Provider extends AbstractProvider 
{
    /**
     * request
     *
     * @var string
     */
    public $serviceName = 'request'; 
    /**
     * init for request
     *
     * @return void
     */
    public function init() 
    {
        $request = new Request();

        $this->di->set($this->serviceName, $request);
    }
}


?>