<?php 

namespace Engine\Service\Auth;

use Engine\Core\Auth\Auth;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider 
{
    /**
     * auth name provider
     *
     * @var string
     */
    public $serviceName = 'auth'; 
    /**
     * init for auth
     *
     * @return void
     */
    public function init() 
    {
        $auth = new Auth(); 

        $this->di->set($this->serviceName, $auth);
    }
}


?>