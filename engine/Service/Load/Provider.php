<?php

namespace Engine\Service\Load;

use Engine\Load;
use Engine\Service\AbstractProvider;
use Engine\DI\DI; 

class Provider extends AbstractProvider 
{
    public $di; 
    public $serviceName = 'load'; 

    public function init() 
    {
        $load = new Load($this->di);

        $this->di->set($this->serviceName, $load); 

        //return $this;
    }
}

?>