<?php 

namespace Engine\Service\View;

use Engine\Service\AbstractProvider;
use Engine\Core\Template\View; 

class Provider extends AbstractProvider 
{
    /**
     * view
     *
     * @var string
     */
    public $serviceName = 'view';

    /**
     * init abstract function
     *
     * @return void
     */
    public function init() 
    {
        $view = new View(); 

        $this->di->set($this->serviceName, $view);

    }

}


?>