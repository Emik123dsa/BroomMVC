<?php 

namespace Engine\Core\Router; 

class DispatchedRoute 
{
    /**
     * controller
     *
     * @var [type]
     */
    private $controller;
    /**
     * parameters
     *
     * @var [type]
     */ 
    private $parameters;
/**
 * construct
 *
 * @param [type] $controller
 * @param [type] $parameters
 */
    public function __construct($controller, $parameters = [])
    {
        $this->controller = $controller;
        $this->parameters = $parameters;

    }
    /**
     * getController
     *
     * @return void
     */
    public function getController () 
    {
        return $this->controller;
    }
    /**
     * getParameters
     *
     * @return void
     */
    public function getParameters() 
    {
        
        return $this->parameters;
    }
}

?>