<?php 

namespace Engine\Service\Session;

use Engine\Core\Session\Session; 

use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider 
{
    public $serviceName = 'session'; 

    public function init() 
    {
        $session = Session::getInstance();

        $this->di->set($this->serviceName, $session);
        
    }

}

?>